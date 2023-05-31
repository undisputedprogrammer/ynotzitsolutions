<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ContactMail;
use App\Models\Candidate;
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

    public function apply(Request $request){

        // $details=$request->validate([
        //     'name'=>['required', 'min:3']
        // ])

        Candidate::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'qualification'=>$request['qualification'],
            'year_of_passing'=>$request['yop'],
            'course'=>$request['course'],
        ]);

        $data=['subject'=>"You are requested to take the test"];

        Mail::mailer('smtp2')->to($request['email'])->send(new TestMail($data));

        return response()->json(['Great! Check your inbox']);
    }
}

