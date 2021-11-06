<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'brand_id',
        'store_id',
        'category_id',
        'name',
        'weight',
        'price',
        'sale_price',
        'qty',
        'status',
        'desc'
    ];

    public function brand(){
        return $this->hasMany(Store::class);
    }
    public function category(){
        return $this->hasMany(Category::class);
    }
    public function store(){
        return $this->belongsTo(Store::class);
    }
}
