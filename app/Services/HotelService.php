<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Support\Collection;

class HotelService
{
    public function getHotelData(): Collection
    {
        return Hotel::all();
    }
}
