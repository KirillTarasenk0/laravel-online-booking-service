<?php

namespace App\Http\Controllers\Bookings;

use App\Http\Controllers\Controller;
use App\Services\BookingRoomService;
use Illuminate\Http\RedirectResponse;
use App\Events\BookingRoomEvent;
use Illuminate\Support\Facades\Auth;

class BookRoomController extends Controller
{
    public function __construct(
        private BookingRoomService $bookingRoomService,
    ) {}
    public function store(): RedirectResponse
    {
        $this->bookingRoomService->bookRoom();
        BookingRoomEvent::dispatch();
        return redirect()->route('index');
    }
}
