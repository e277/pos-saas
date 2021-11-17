<?php

namespace App\Http\Livewire\Pos;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Pos extends Component
{
   public $cartItems;
   public $msg;
   public $customerInfo;
   public $search;
   public $itemQty;
   
   public function mount(){
        $this->cartItems = Cart::where('customer_id', 10)->with('product')->get();
   }
    public function render()
    {
        $products = Product::search('name', $this->search)->with(['store','category','brand'])->where('store_id', 1)->get();
        return view('livewire.pos.pos',['products'=>$products]);
    }

    public function addItem(int $productId){
        // if(!$this->customerInfo){
        //     $this->msg = "<script>alert('Please Complete Customer Form First!');</script>";
        //     return;
        // }

        
        $product = Product::find($productId);



    }
 
}
