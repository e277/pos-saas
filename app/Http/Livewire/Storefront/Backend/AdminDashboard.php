<?php

namespace App\Http\Livewire\Storefront\Backend;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.storefront.backend.admin-dashboard')
            ->extends('layouts.storeBackend');
    }
}
