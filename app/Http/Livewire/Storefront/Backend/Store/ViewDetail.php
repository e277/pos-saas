<?php

namespace App\Http\Livewire\Storefront\Backend\Store;

use Livewire\Component;

class ViewDetail extends Component
{
    public function render()
    {
        return view('livewire.storefront.backend.store.view-detail')
            ->extends('layouts.storeBackend');
    }
}
