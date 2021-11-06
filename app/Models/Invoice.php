<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'sales_id',
        'project_id',
        'invoice_nbr'
    ];

    public function sales(){
        return $this->belongsTo(Sales::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
