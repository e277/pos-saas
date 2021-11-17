<?php

namespace App\Http\Livewire\Pos;

use App\Models\Product;
use Livewire\Component;

class ViewProduct extends Component
{
    public function render()
    {
        // $stores = Store::select('name');
        // $products = Product::select(['name', 'qty', 'price', 'sale_price']);
        // $brands = Brand::select('brand_nm');
        // $categories = Category::select('category_nm');

        $products = Product::join('brands', 'brands.id', '=', 'products.brand_id')
                                ->join('stores', 'stores.id', '=', 'products.store_id')
                                ->join('categories', 'categories.id', '=', 'products.category_id')
                                ->select([
                                    'stores.name as store_nm',
                                    'products.name',
                                    'products.qty as product_qty',
                                    'products.price as reg_price',
                                    'products.sale_price',
                                    'brands.brand_nm',
                                    'categories.category_nm'
                                    ])->get();

        // dd($products);
        return view('livewire.pos.view-product',['products' => $products])
        ->extends('layouts.storeBackend');
    }
}
