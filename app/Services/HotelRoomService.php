<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class HotelRoomService
{
    private string $hotelName = '';
    private string $hotelDescription = '';
    private string $hotelAddress = '';
    private string $roomDescription = '';
    private int $roomCapacity = 0;
    private float $roomPrice = 0;
    public function getHotelData(): LengthAwarePaginator
    {
        return Hotel::paginate(15);
    }
    public function findHotel(string $hotelName, int $roomCapacity): void
    {
        $hotels = Hotel::whereHas('rooms', function (Builder $query) use ($hotelName, $roomCapacity) {
            $query->where('hotels.name',  $hotelName)->where('rooms.capacity', $roomCapacity);
        })->get();
        foreach ($hotels as $hotel) {
            $this->hotelName = $hotel->name;
            session(['hotelName' => $this->hotelName]);
            $this->hotelDescription = $hotel->description;
            session(['hotelDescription' => $this->hotelDescription]);
            $this->hotelAddress = $hotel->address;
            session(['hotelAddress' => $this->hotelAddress]);
            foreach ($hotel->rooms as $room) {
                $this->roomDescription = $room->description;
                session(['roomDescription' => $this->roomDescription]);
                $this->roomCapacity = $room->capacity;
                session(['roomCapacity' => $this->roomCapacity]);
                $this->roomPrice = $room->price;
                session(['roomPrice' => $this->roomPrice]);
            }
        }
    }
    public function getHotelName(): string
    {
        return $this->hotelName;
    }
    public function getHotelDescription(): string
    {
        return $this->hotelDescription;
    }
    public function getHotelAddress(): string
    {
        return $this->hotelAddress;
    }
    public function getRoomDescription(): string
    {
        return $this->roomDescription;
    }
    public function getRoomCapacity(): int
    {
        return $this->roomCapacity;
    }
    public function getRoomPrice(): float
    {
        return $this->roomPrice;
    }
}
