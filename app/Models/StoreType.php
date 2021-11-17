<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StoreType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Store[] $store
 * @property-read int|null $store_count
 * @method static \Illuminate\Database\Eloquent\Builder|StoreType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreType query()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StoreType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

    public function store(){
        return $this->hasMany(Store::class);
    }
}
