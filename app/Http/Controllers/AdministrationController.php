<?php

namespace App\Http\Controllers;

use App\Models\User;
use Monolog\Registry;
use App\Models\Marketer;
use App\Mail\ApprovalMail;
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
            'username' => $cred['username'],
            'password' => $cred['password']
        ];
        Mail::mailer('smtp2')->to($marketer['email'])->send(new ApprovalMail($data));

        return redirect('/admin/index');
    }

    public function logout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}


