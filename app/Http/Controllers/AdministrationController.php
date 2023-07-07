<?php

namespace App\Http\Controllers;

use App\Models\User;
use Monolog\Registry;
use App\Models\Marketer;
use App\Mail\ApprovalMail;
use App\Models\Booking;
use App\Models\Coupon;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class AdministrationController extends Controller
{
    private $adminService;

    public function __construct(AdminServices $service)
    {
        $this->adminService = $service;
    }

    public function index(Request $request){
        if (! Gate::allows('is-admin')) {
            abort(403);
        }
        return view('admin.admin-index');
    }

    public function approveIndex(){

        if (! Gate::allows('is-admin')) {
            abort(403);
        }
        $registrations = Registration::all();

        return view('admin.admin-approveMarketers', compact('registrations'));
    }

    public function approve(Request $request){

        if (! Gate::allows('is-admin')) {
            abort(403);
        }
        // dd($request['rid']);


        // $user = User::create([
        //     'name'=>
        // ]);


        $registration=Registration::find($request['rid']);

        $cred = $this->adminService->generateCredentials($registration['name']);

        $user = $this->adminService->createUser($registration, $cred);

        $user->assignRole('marketer');

        $marketer = Marketer::create([
            'user_id'=>$user->id,
            'name'=>$registration['name'],
            'email'=>$registration['email'],
            'phone'=>$registration['phone'],
            'place'=>$registration['place'],
            'gender'=>$registration['gender'],
            'age'=>$registration['age'],
        ]);

        $registration->delete();

        // dd($marketer);

        $data=[
            'subject'=>'Welcome Affiliate Marketer',
            'name' => $marketer['name'],
            'email' => $marketer['email'],

            'password' => $cred['password']
        ];
        Mail::mailer('smtp2')->to($marketer['email'])->send(new ApprovalMail($data));

        return back()->with(['message'=>'Affiliate approved']);
    }

    public function logout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function addCoupon(Request $request){
        $coupons = Coupon::where('user_id','!=',null)->with('user')->get();
        return view('admin.admin-manage-coupon', compact('coupons'));
    }

    public function createCoupon(Request $request){
        $request->validate([
            'code'=>['required','min:6']
        ]);
        $code = strtoupper($request['code']);
        $c = Coupon::where('code',$code)->get()->first();
        $usercoupons = Coupon::where('user_id',$request->user()->id)->get();
        if($c!=null){
            return back()->withInput()->withErrors(['code'=>"Coupon already exists"])->onlyInput('code');
        }
        elseif(count($usercoupons)>7){
            return back()->withErrors(['code'=>"You have already reached your Coupon limit"])->onlyInput('code');
        }
        else{
            // $offer = Offer::find($request['offer']);

            $coupon = Coupon::create([

                'code'=>$code,
                // 'price'=>$offer['discount'],
                'user_id'=>$request->user()->id,
                // 'offer_id'=>$request['offer']
            ]);

            return redirect('/admin/manage-coupons')->with('message','Coupon created succesfully');
        }
    }

    public function bookings(){
        if (! Gate::allows('is-admin')) {
            abort(403);
        }
        $bookings = Booking::where('id','>',0)->with('reffered')->with('coupon')->get();
        return view('admin.manage-bookings', compact('bookings'));
    }


    public function updateStatus(Request $request){
        if (! Gate::allows('is-admin')) {
            abort(403);
        }
        $booking = Booking::find($request['bid']);
        $booking['status']=$request['status'];
        $booking->save();

        return redirect('/admin/manage-bookings')->with(['message'=>'Booking status updated']);
    }

    public function reject(Request $request){
        if (! Gate::allows('is-admin')) {
            abort(403);
        }

        $registration = Registration::find($request['rid']);

        $registration->delete();

        return back()->with(['warning'=>'Registration deleted']);
    }
}


