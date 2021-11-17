<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{

    public function definition()
    {
        return [
            'sales_id' => Sales::factory(),
            'product_id' => Product::where('status','active')->get()->random()->id,
            'invoice_nbr' => random_int(0,100000000),
            'date' => $this->faker->dateTimeThisYear
        ];
    }
}
