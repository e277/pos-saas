<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property int $store_id
 * @property string $code
 * @property int $discount_amt
 * @property string $status
 * @property string $expire_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Coupon|null $usedCoupon
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscountAmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
