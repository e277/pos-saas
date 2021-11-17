<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'contact_id' => Contact::factory(),
            'store_type_id' => $this->faker->numberBetween(0, 5),
            'name' => $this->faker->company(),
            'title' => $this->faker->companySuffix(),
            'banner_message' => $this->faker->realText(20),
            'slogan' => $this->faker->realText(20),
            'mission' => $this->faker->realText(10),
            'theme' => "lorem",
            'desc' => $this->faker->realText(22),
            'logo_path' => Str::random(10),
        ];
    }


}
