<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Coupon;
use App\Models\Booking;
use App\Models\Marketer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Database\Eloquent\Builder;

class MarketerController extends Controller
{
    public function home(Request $request){
        // dd($request->user());
        $coupons = Coupon::where('user_id', $request->user()->id)->get();
        $marketer = Marketer::where('user_id',$request->user()->id)->get()->first();
        $offers = Offer::all();
        $refferals = Booking::where('reffered_by',$request->user()->id)->get();
        $refferalsClosed = Booking::where('reffered_by',$request->user()->id)->where('status','closed')->get();
        return view('marketer.dashboard', compact('coupons','marketer','offers','refferals','refferalsClosed'));
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
            return back()->withErrors(['submit'=>"You have already reached your Coupon limit"])->onlyInput('submit');
        }
        else{
            $offer = Offer::find($request['offer']);

            $coupon = Coupon::create([

                'code'=>$code,
                // 'price'=>$offer['discount'],
                'user_id'=>$request->user()->id,
                // 'offer_id'=>$request['offer']
            ]);

            return redirect('/marketer/home')->with('message','Coupon created succesfully');
        }
    }

    public function authenticate(LoginRequest $request){

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('/marketer/home');
    }

    public function changePassword(Request $request){
        return view('marketer.change-password');
    }

    public function storePassword(Request $request){

        // if($request->user()->password){
        //     dd($request->user()->password);
        // }
        // $status = Password::reset(
        //     $request->only('email', 'password', 'password_confirmation', 'token'),
        //     function ($user) use ($request) {
        //         $user->forceFill([
        //             'password' => Hash::make($request->password),
        //             'remember_token' => Str::random(60),
        //         ])->save();

        //         event(new PasswordReset($user));
        //     }
        // );

        // dd($status);

        $request->validate([

            'password' => ['required', 'confirmed'],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        // $status = Password::reset(
        //     $request->only('email', 'password', 'password_confirmation', 'token'),
        //     function ($user) use ($request) {
        //         $user->forceFill([
        //             'password' => Hash::make($request->password),
        //             'remember_token' => Str::random(60),
        //         ])->save();

        //         event(new PasswordReset($user));
        //     }
        // );

        $user = $request->user();

        $status = $user->forceFill([
                     'password' => Hash::make($request->password),
                      'remember_token' => Str::random(60),
                     ])->save();

        if($status){
            return redirect('/marketer/home')->with('message','Password changed successfully');
        }
        else{
            return back()->withErrors(['password'=>'Sorry, could not change password']);
        }
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/marketer/login');
    }

    public function refferals(Request $request){
        $coupons = Coupon::where('user_id',$request->user()->id)->with('bookings')->withCount(['bookings'=> function (Builder $query) {
            $query->where('status', 'closed');
        }])->get();
        // $bookings=[];
        // foreach ($coupons as $coupon) {

        // }
        return view('marketer.refferals', compact('coupons'));
    }

    public function manageCoupons(Request $request){
        $coupons = Coupon::where('user_id',$request->user()->id)->get();
        // $offers = Offer::all();
        return view('marketer.manage-coupons', compact('coupons'));
    }
}
