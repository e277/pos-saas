<?php

namespace App\Http\Livewire\Storefront\Backend;

use Livewire\Component;

class Adminindox extends Component
{
    public function render()
    {
        return view('livewire.storefront.backend.adminindox')
            ->extends('layouts.storeBackend');
    }
}
