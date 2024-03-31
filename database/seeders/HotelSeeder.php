<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        Hotel::factory()->count(50)->create();
    }
}
