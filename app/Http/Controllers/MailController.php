<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        $details=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email'],

            'message'=>['required','min:5'],
            'phone'=>['required','min:10'],
        ]);
    $data=[
        'subject'=>'Message from '.$details['name'],
        'name'=>$details['name'],
        'email'=>$details['email'],
        'phone'=>$details['phone'],
        'services'=>$request['services'],
        'message'=>$details['message'],
    ];

        Mail::to(config('credentials.to_address'))->send(new ContactMail($data));

        return response()->json(['Great Check your email']);
    }
}

