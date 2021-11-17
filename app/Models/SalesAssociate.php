<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SalesAssociate
 *
 * @property int $id
 * @property int $user_id
 * @property int $hours
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $User
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sales[] $sales
 * @property-read int|null $sales_count
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate whereHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesAssociate whereUserId($value)
 * @mixin \Eloquent
 */
class SalesAssociate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hours'
    ];

    public function sales(){
        return $this->hasMany(Sales::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
