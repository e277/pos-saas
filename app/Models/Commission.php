<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Commission
 *
 * @property int $id
 * @property int $store_id
 * @property int $commission_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Store $store
 * @method static \Illuminate\Database\Eloquent\Builder|Commission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commission whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commission whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Commission extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'commission_rate'
    ];

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
