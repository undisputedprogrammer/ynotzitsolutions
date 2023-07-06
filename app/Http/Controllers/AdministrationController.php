<?php

namespace App\Http\Controllers;

use App\Models\User;
use Monolog\Registry;
use App\Mail\ApprovalMail;
use App\Models\Marketer;
use App\Models\Registration;
use App\Services\AdminServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdministrationController extends Controller
{
    private $adminService;

    public function __construct(AdminServices $service)
    {
        $this->adminService = $service;
    }

    public function approveIndex(){
        $registrations = Registration::all();

        return view('admin.admin-approveMarketers', compact('registrations'));
    }

    public function approve(Request $request){
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
}


