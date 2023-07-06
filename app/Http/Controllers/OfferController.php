<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Coupon;
use App\Models\Offer;
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
            'user_id'=>$request->user()->id,
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
        $offer = Offer::where('short_code','SSO')->get()->first();
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
                'price' => $offer['discount'],
            ];
            return response()->json($c);
        }

        // return response()->json($coupon);

    }

    public function book(Request $request){
        $coupon = Coupon::where('code',$request['coupon'])->get()->first();
        $booking = Booking::create([

            'name'=>$request['name'],
            'company'=>$request['company'],
            'phone'=>$request['phone'],
            'coupon_id'=>$coupon['id'],
            'price' => $request['price'],
            'status'=>'booked',
            'reffered_by'=>$coupon['user_id']
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
