<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rating
 *
 * @property int $id
 * @property int $customer_id
 * @property int $product_id
 * @property int $rating_value
 * @property string|null $comment
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer $customer
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRatingValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'rating_value'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
