<?php

namespace Database\Factories;

use App\Models\Coupon;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class CouponFactory extends Factory
{

    public function definition()
    {
        return [
            'store_id' => Store::all()->random()->id,
            'code' => Str::random(),
            'discount_amt' => random_int(300,10000),
            'status' => 'active',
            'expire_date' => $this->faker->dateTimeThisYear
        ];
    }
}
