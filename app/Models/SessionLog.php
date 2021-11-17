<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SessionLog
 *
 * @property int $id
 * @property int $user_id
 * @property string $log_on
 * @property string|null $log_out
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereLogOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereLogOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereUserId($value)
 * @mixin \Eloquent
 */
class SessionLog extends Model
{
    use HasFactory;

    protected $fillable = [
        
    ];

    public function user(){
        return $this->belongsTo(USer::class);
    }
}
