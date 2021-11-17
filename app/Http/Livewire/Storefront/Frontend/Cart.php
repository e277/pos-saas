<?php

namespace App\Http\Livewire\Storefront\Frontend;

use App\Models\Cart as ModelsCart;
use App\Models\Coupon;
use Livewire\Component;

class Cart extends Component
{
    public $subtotal;
    public $hasCoupon = false;
    public $coupon;
    public $afterDiscount;
    public $discountAmt;

    public function render()
    {   
        return view('livewire.storefront.frontend.cart',[
            'cart'=> $this
        ]);
    }

    public function getCartItem(){
        return ModelsCart::where('customer_id','=',1)->get();
    }

    public function setSubtotal(){
        $cart = $this->getCartItem();
        $total = 0;

        foreach ($cart as $key ) {
            $key->product->sale_price == 0
                ? $cost = $key->qty * $key->product->price
                : $cost = $key->qty * $key->product->sale_price;
            $total = $total + $cost;
        }

        $this->hasCoupon
            ? $this->afterDiscount($total)
            : $this->subtotal = $total;
    }

    public function getSubtotal(){
        return $this->subtotal;
    }

    public function getTotal(){
        return $this->hasCoupon
            ? $this->subtotal - $this->afterDiscount
            : $this->subtotal;
    }

    public function getAfterDiscount(){
        echo $this->hasCoupon
            ? '-$'.$this->afterDiscount
            : '$0.00';
    }

    public function increaseQuantity($id){
        $item = ModelsCart::find($id);
        $item->qty = ++$item->qty;
        $item->save();
    }

    public function decreaseQuantity($id){
        $item = ModelsCart::find($id);
        $item->qty == 1
            ? $this->removeItem($id)
            : $item->qty = --$item->qty;
        $item->save();
    }

    public function applyCoupon(){
        empty($coupon = Coupon::where('code','=',$this->coupon)->first())
            ? $this->addError('coupon', 'Invalid coupon code!')
            : $this->hasCoupon($coupon);
    }

    public function hasCoupon($coupon){
        $this->hasCoupon = true;
        $this->discountAmt = $coupon->discount_amt;
    }

    public function afterDiscount($total){
        $this->afterDiscount = ($this->discountAmt / 100) * $total;
        $this->subtotal = $total;
    }

    public function removeItem($id){
        $item = ModelsCart::find($id);
        $item->delete();
    }

    public function removeCoupon(){
        $this->hasCoupon = false;
        $this->discountAmt = '0.00';
        $this->coupon = '';
    }
}
