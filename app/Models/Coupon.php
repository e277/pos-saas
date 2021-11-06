<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'code',
        'discount_amt',
        'status',
        'expire_date'
    ];

    public function usedCoupon(){
        return $this->hasOne(Coupon::class);
    }
}
