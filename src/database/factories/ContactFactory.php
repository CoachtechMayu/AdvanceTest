<?php

namespace Database\Factories;
use App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->lastName(),
            'last_name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement(['男性', '女性']),
            'email' => $this->faker->email(),
            'postcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(),
            'option' => $this->faker->sentence()
        ];
    }
}
