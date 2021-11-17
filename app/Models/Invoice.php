<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Invoice
 *
 * @property int $id
 * @property int $sale_id
 * @property int $project_id
 * @property string $invoice_nbr
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Sales $sales
 * @method static \Database\Factories\InvoiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceNbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $product_id
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereProductId($value)
 */
class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'sales_id',
        'product_id',
        'invoice_nbr',
        'date'
    ];

    public function sales(){
        return $this->belongsTo(Sales::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
