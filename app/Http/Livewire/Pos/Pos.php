<?php

namespace App\Http\Livewire\Pos;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Pos extends Component
{
   public $products;
   
   public function mount(){
        $this->products = Product::with(['store','category','brand'])->where('store_id', 1)->get();
   }
    public function render()
    {
        return view('livewire.pos.pos');
    }
 
}
