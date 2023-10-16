<?php

namespace Database\Factories;

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
            'name' => $this->faker->name(),
            'subject' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'status' => rand(1, 2),
            'content' => $this->faker->name(),
        ];
    }
}
