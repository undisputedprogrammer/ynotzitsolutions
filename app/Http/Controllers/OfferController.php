<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Coupon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

use function PHPUnit\Framework\returnSelf;

class OfferController extends Controller
{
    public function new(){
        $coupons = Coupon::all();
        return view('add-coupon', compact('coupons'));
    }

    public function create(Request $request){
        Coupon::create([
            'code'=>$request['code'],
            'price'=>$request['price'],
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
            $c = [
                'message'=>"Coupon not found",
            ];
            return response()->json($c);
        }
        else{
            $c = [
                'message'=>"Coupon found",
                'code' => $coupon['code'],
                'price' => $coupon['price'],
            ];
            return response()->json($c);
        }

        // return response()->json($coupon);

    }

    public function book(Request $request){
        $booking = Booking::create([

            'name'=>$request['name'],
            'company'=>$request['company'],
            'phone'=>$request['phone'],
            'coupon'=>$request['coupon'],
            'price' => $request['price'],
        ]);

        return redirect('/booking/completed');

    }

    public function bookings(){
        $bookings = Booking::all();
        return view('bookings', compact('bookings'));
    }

    public function deleteBooking($id){
        $booking = Booking::find($id);
        $booking->delete();
        return redirect('/offers/bookings');
    }
}
