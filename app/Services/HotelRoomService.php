<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class HotelRoomService
{
    private int $hotelId = 0;
    private string $hotelName = '';
    private string $hotelDescription = '';
    private string $hotelAddress = '';
    private int $roomId = 0;
    private string $roomDescription = '';
    private int $roomCapacity = 0;
    private float $roomPrice = 0;
    public function getHotelData(): LengthAwarePaginator
    {
        return Hotel::paginate(15);
    }
    public function findHotel(string $hotelName, int $roomCapacity, mixed $startDate, mixed $endDate): void
    {
        $hotels = Hotel::whereHas('rooms', function (Builder $query) use ($hotelName, $roomCapacity) {
            $query->where('hotels.name',  $hotelName)->where('rooms.capacity', $roomCapacity);
        })->get();
        session(['startDate' => $startDate]);
        session(['endDate' => $endDate]);
        foreach ($hotels as $hotel) {
            $this->hotelId = $hotel->id;
            session(['hotelId' => $this->hotelId]);
            $this->hotelName = $hotel->name;
            session(['hotelName' => $this->hotelName]);
            $this->hotelDescription = $hotel->description;
            session(['hotelDescription' => $this->hotelDescription]);
            $this->hotelAddress = $hotel->address;
            session(['hotelAddress' => $this->hotelAddress]);
            foreach ($hotel->rooms as $room) {
                $this->roomId = $room->id;
                session(['roomId' => $this->roomId]);
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
