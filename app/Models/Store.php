<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function contact(){
        return $this->hasMany(contact::class);
    }
    public function product(){
        return $this->hasMany(product::class);
    }
    public function storeType(){
        return $this->belongsTo(StoreType::class);
    }
    public function banner(){
        return $this->hasMany(Banner::class);
    }
    public function commission(){
        return $this->hasOne(Commission::class);
    }
    public function coupon(){
        return $this->hasMany(Coupon::class);
    }

}
