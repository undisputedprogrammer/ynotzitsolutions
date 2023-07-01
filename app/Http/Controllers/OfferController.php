<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Coupon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class OfferController extends Controller
{
    public function new(){
        $coupons = Coupon::all();
        return view('add-coupon', compact('coupons'));
    }

    public function create(Request $request){
        Coupon::create([
            'code'=>$request['code']
        ]);

        return redirect('/coupons/new');
    }

    public function destroy($id){
        $coupon = Coupon::find($id);

        $coupon->delete();
        return redirect('/coupons/new');

    }

    public function find(Request $request){
        $coupon= Coupon::where('code',$request['code'])->get()->first();

        if($coupon==null){
            return response()->json("not found");
        }
        else{
            return response()->json("coupon found");
        }

        // return response()->json($coupon);

    }

    public function book(Request $request){
        $booking = Booking::create([

            'name'=>$request['name'],
            'company'=>$request['company'],
            'phone'=>$request['phone'],
        ]);

        return redirect('/booking/completed');

    }
}
