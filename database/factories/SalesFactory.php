<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use App\Models\SalesAssociate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        $product = Product::where('status','=','active')->get()->random();
        $quantity = random_int(0,20);

        return [
            'sales_associate_id' => SalesAssociate::all()->random()->id,
            'customer_id'=> Customer::all()->random()->id,
            't_quantity'=> $quantity,
            't_amount'=> $quantity * $product->price - $product->sale_price,
            'date'=> $this->faker->dateTimeThisYear('now','Jamaica')
        ];
    }
}
