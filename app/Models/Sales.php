<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'sales_associate_id',
        'customer_id',
        't_quantity',
        't_amount',
        'date'
    ];

    public function salesAssociate(){
        return $this->belongsTo(SalesAssociate::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function invoice(){
        return $this->hasMany(Invoice::class);
    }
}
