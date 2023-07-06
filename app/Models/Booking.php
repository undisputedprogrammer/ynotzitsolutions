<?php

namespace App\Models;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['name','company','phone','coupon_id','price','status','reffered_by'];

    public function coupon(){
        return $this->hasOne(Coupon::class);
    }
}
