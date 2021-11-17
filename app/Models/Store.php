<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Store
 *
 * @property int $id
 * @property int $user_id
 * @property int $contact_id
 * @property int $store_type_id
 * @property string $name
 * @property string $title
 * @property string|null $banner_message
 * @property string|null $slogan
 * @property string|null $mission
 * @property string|null $theme
 * @property string $desc
 * @property string|null $logo_path
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banner[] $banner
 * @property-read int|null $banner_count
 * @property-read \App\Models\Commission|null $commission
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contact[] $contact
 * @property-read int|null $contact_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Coupon[] $coupon
 * @property-read int|null $coupon_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $product
 * @property-read int|null $product_count
 * @property-read \App\Models\StoreType $storeType
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\StoreFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Store newQuery()
 * @method static \Illuminate\Database\Query\Builder|Store onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Store query()
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereBannerMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereLogoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereStoreTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Store withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Store withoutTrashed()
 * @mixin \Eloquent
 */
class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'contact_id',
        'store_type_id',
        'name',
        'title',
        'banner_message',
        'slogan',
        'mission',
        'theme',
        'desc',
        'theme',
        'logo_path'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function contact(): HasMany
    {
        return $this->hasMany(contact::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(product::class);
    }

    public function storeType(): BelongsTo
    {
        return $this->belongsTo(StoreType::class);
    }

    public function banner(): HasMany
    {
        return $this->hasMany(Banner::class);
    }

    public function commission(): HasOne
    {
        return $this->hasOne(Commission::class);
    }

    public function coupon(): HasMany
    {
        return $this->hasMany(Coupon::class);
    }

    public function logoUrl(): string
    {
        return $this->logo_path
                ? Storage::disk('storeLogo')->url($this->logo_path)
                : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email)));
    }

}
