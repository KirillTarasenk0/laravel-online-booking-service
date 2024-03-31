<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Services\HotelService;

class MainPageController extends Controller
{
    public function __construct(
        protected HotelService $hotelService,
    ) {}
    public function index(): View
    {
        return view('welcome', [
            'hotels' => $this->hotelService->getHotelData()
        ]);
    }
}
