<?php

namespace App\Http\Livewire\Storefront\Frontend;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.storefront.frontend.header')->extends('layouts.storeFrontend');
    }
}
