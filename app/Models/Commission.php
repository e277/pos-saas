<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
