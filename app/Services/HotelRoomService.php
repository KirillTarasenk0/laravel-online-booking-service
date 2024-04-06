<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class HotelRoomService
{
    private string $hotelName;
    private string $hotelDescription;
    private string $hotelAddress;
    private string $roomDescription;
    private int $roomCapacity;
    private float $roomPrice;
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
            $this->hotelDescription = $hotel->description;
            $this->hotelAddress = $hotel->address;
            foreach ($hotel->rooms as $room) {
                $this->roomDescription = $room->description;
                $this->roomCapacity = $room->capacity;
                $this->roomPrice = $room->price;
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
