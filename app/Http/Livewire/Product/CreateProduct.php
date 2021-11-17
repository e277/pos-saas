<?php

namespace App\Http\Livewire\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Livewire\Component;

class CreateProduct extends Component
{
    public Product $product;

    protected $rules = [
        'product.store_id' => 'required',
        'product.brand_id' => 'required',
        'product.category_id' => 'required',
        'product.name' => 'required',
        'product.weight' => 'required',
        'product.price' => 'required',
        'product.sale_price' => 'required',
        'product.sku' => 'required',
        'product.qty' => 'required',
        'product.status' => 'required',
        'product.desc' => 'required',
    ];

    public function mount()
    {
        $this->product = new Product();
    }

    public function storeProduct(): void
    {
        $this->validate();
        $this->product->save();
        $this->product = new Product();
        session()->flash('success', 'Product has been successfully created');
    }

    public function render()
    {
        return view('livewire.product.create-product', [
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'stores' => Store::where('user_id', auth()->user()->id)->get(),
        ])->extends('layouts.storeBackend');
    }
}
