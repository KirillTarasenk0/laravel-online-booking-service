<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

class RoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'hotel_id' => Hotel::factory(),
            'description' => fake()->text,
            'capacity' => fake()->numberBetween(1, 8),
            'price' => fake()->randomNumber(4),
        ];
    }
}
