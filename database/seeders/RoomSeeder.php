<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        Room::factory()->count(50)->create();
    }
}
