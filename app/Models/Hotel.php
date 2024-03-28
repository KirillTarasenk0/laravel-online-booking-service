<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Room;
use App\Models\HotelAdmin;

class Hotel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'address'
    ];
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
    public function hotelAdmins(): HasMany
    {
        return $this->hasMany(HotelAdmin::class);
    }
}
