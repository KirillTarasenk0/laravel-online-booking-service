<?php

namespace App\Http\Controllers\Bookings;

use App\Http\Controllers\Controller;
use App\Services\BookingRoomService;
use Illuminate\Http\RedirectResponse;

class BookRoomController extends Controller
{
    public function __construct(
        private BookingRoomService $bookingRoomService,
    ) {}
    public function store(): RedirectResponse
    {
        $this->bookingRoomService->bookRoom();
        return redirect()->route('index');
    }
}
