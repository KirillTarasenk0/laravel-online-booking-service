<?php

namespace App\Services;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingRoomService
{
    public function bookRoom()
    {
        Booking::insert([
           'user_id' => Auth::id(),
           'room_id' => session('roomId'),
           'start_date' => session('startDate'),
           'end_date' => session('endDate'),
           'status' => 'confirmed',
        ]);
    }
}
