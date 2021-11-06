<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
