<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class RoomDescriptionController extends Controller
{
    public function index(): View
    {
        return view('components.hotel-rooms-description', [
            'hotelName' => session('hotelName'),
            'hotelDescription' => session('hotelDescription'),
            'hotelAddress' => session('hotelAddress'),
            'roomDescription' => session('roomDescription'),
            'roomCapacity' => session('roomCapacity'),
            'roomPrice' => session('roomPrice'),
        ]);
    }
}
