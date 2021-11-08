<?php

namespace App\Http\Livewire\Storefront\Backend\Store;

use Livewire\Component;

class CreateAsscoiate extends Component
{
    public function render()
    {
        return view('livewire.storefront.backend.store.create-asscoiate')
            ->extends('layouts.storeBackend');
    }
}
