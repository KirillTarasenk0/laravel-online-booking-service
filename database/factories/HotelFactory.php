<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'description' => fake()->text,
            'address' => fake()->address
        ];
    }
}
