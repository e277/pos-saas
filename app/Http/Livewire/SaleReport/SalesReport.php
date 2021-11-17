<?php

namespace App\Http\Livewire\SaleReport;

use App\Models\Product;
use Livewire\Component;

class SalesReport extends Component
{
    public function render()
    {
        return view('livewire.sale-report.sales-report',[
            'products' => Product::paginate(5)
        ])
            ->extends('layouts.storeBackend');
    }
}
