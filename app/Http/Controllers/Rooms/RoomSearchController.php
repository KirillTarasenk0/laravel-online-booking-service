<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomSearchRequest;
use App\Services\HotelRoomService;
use Illuminate\View\View;

class RoomSearchController extends Controller
{
    public function __construct(
        private HotelRoomService $hotelService,
    ){}
    public function findRoom(RoomSearchRequest $roomSearchRequest): View
    {
        $this->hotelService->findHotel($roomSearchRequest['hotelName'], $roomSearchRequest['visitorsNumber']);
        if ($this->hotelService->getHotelName() === '' ||
            $this->hotelService->getRoomCapacity() === 0
        ) {
            return view('components.page-items.hotels-page.hotel-not-found');
        }
        return view('components.hotels', [
            'hotelName' => $this->hotelService->getHotelName(),
            'hotelAddress' => $this->hotelService->getHotelAddress(),
            'roomPrice' => $this->hotelService->getRoomPrice(),
        ]);
    }
}
