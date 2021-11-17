<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $contact_num
 * @property string $contact_email
 * @property string $contact_location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Store $store
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\ContactFactory factory(...$parameters)
 */
class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'contact_num',
        'contact_email',
        'contact_location'
    ];
    public function store(){
        return $this->belongsTo(Store::class);
    }
}
