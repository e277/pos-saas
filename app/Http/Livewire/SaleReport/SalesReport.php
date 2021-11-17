<?php

namespace App\Http\Livewire\SaleReport;

use Livewire\Component;

class SalesReport extends Component
{
    public function render()
    {
        return view('livewire.sale-report.sales-report')
            ->extends('layouts.storeBackend');
    }
}
