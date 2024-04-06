<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Services\HotelRoomService;

class MainPageController extends Controller
{
    public function __construct(
        protected HotelRoomService $hotelRoomService,
    ) {}
    public function index(): View
    {
        return view('welcome', [
            'hotels' => $this->hotelRoomService->getHotelData()
        ]);
    }
    public function toStoreEmail(): RedirectResponse
    {
        return redirect()->route('create-news-email');
    }
}
