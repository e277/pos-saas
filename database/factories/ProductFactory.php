<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'brand_id' => Brand::all()->random()->id,
            'store_id' => Store::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'name' => "Random Product ".random_int(0,10000),
            'weight' => random_int(0,20),
            'price' => random_int(0,50000),
            'sale_price' => random_int(0,10000),
            'sku' => Str::random(),
            'qty' => random_int(0,400),
            'status' => 'active',
            'desc' => "Random Product Description",

        ];
    }


}
