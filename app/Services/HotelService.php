<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class HotelService
{
    public function getHotelData(): LengthAwarePaginator
    {
        return Hotel::paginate(15);
    }
}
