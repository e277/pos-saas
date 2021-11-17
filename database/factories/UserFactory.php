<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'user_type' => random_int(0, 3),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }


    public function customer()
    {
        return $this->state(function (array $attributes) {
            return [
                'user_type' => 2,
            ];
        });
    }

    public function merchant()
    {
        return $this->state(function (array $attributes) {
            return [
                'user_type' => 1,
            ];
        });
    }

    public function superAdmin()
    {
        return $this->state(function (array $attributes) {
            return [
                'user_type' => 0,
            ];
        });
    }

    public function salesAccountant()
    {
        return $this->state(function (array $attributes) {
            return [
                'user_type' => 3,
            ];
        });
    }
}
