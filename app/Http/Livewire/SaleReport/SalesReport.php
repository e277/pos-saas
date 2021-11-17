<?php

namespace App\Http\Livewire\SaleReport;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SalesReport extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.sale-report.sales-report',[
            'products' => Product::where('status','=','active')->orderBy('id')->paginate(5)
        ])
            ->extends('layouts.storeBackend');
    }
}
