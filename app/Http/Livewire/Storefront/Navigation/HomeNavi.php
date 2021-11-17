<?php

namespace App\Http\Livewire\Storefront\Navigation;

use Livewire\Component;

class HomeNavi extends Component
{
    public function render()
    {
        return view('livewire.storefront.navigation.home-navi')->extends('layouts.storeFrontend');
    }
}
