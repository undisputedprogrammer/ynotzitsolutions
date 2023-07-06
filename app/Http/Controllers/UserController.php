<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){

        // dd($request);

        Registration::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'influencer'=>$request['influencer'],
            'place'=>$request['place'],
            'gender'=>$request['gender'],
            'age'=>$request['age'],
        ]);

        return redirect('/marketer/registration/complete');
    }
}
