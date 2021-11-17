<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UsedCoupon
 *
 * @property int $id
 * @property int $customer_id
 * @property int $coupon_id
 * @property string $use_date
 * @property int $isused
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Coupon $coupon
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon whereIsused($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsedCoupon whereUseDate($value)
 * @mixin \Eloquent
 */
class UsedCoupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'coupon_id',
        'use_date',
        'isused'
    ];
    public function coupon(){
        return $this->belongsTo(Coupon::class);
    }
}
