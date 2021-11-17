<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sales
 *
 * @property int $id
 * @property int $sales_associate_id
 * @property int $customer_id
 * @property int $t_quantity
 * @property float $t_amount
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Invoice[] $invoice
 * @property-read int|null $invoice_count
 * @property-read \App\Models\SalesAssociate $salesAssociate
 * @method static \Database\Factories\SalesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereSalesAssociateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereTAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereTQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
