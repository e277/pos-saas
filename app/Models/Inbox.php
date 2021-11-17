<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Inbox
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property int $sales_associate_id
 * @property int|null $product_id
 * @property string $message
 * @property int $is_seen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereIsSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereSalesAssociateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inbox whereUserId($value)
 */
class Inbox extends Model
{
    use HasFactory;

    public $table = "inbox";

    protected $fillable = [
        'user_id',
        'store_id',
        'sales_associate_id',
        'product_id',
        'message',
        'is_seen'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
