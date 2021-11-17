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
}
