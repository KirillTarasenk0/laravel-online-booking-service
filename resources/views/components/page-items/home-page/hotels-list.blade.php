@foreach($hotels as $hotel)
    <div class="pr-10 pt-10">
        <div>
            <img src="{{ asset('images/hotels/preview/room1.svg') }}" alt="Изображение комнаты отеля"/>
        </div>
        <h5 class="font-bold">{{ $hotel->name }}</h5>
        <p class="text-gray-500 w-24">{{ $hotel->address }}</p>
        <div class="flex bg-blue-100 p-2 ">
            @foreach($hotel->rooms as $room)
                <h6 class="font-bold text-blue-600">{{ $room->price }}₽</h6>
            @endforeach
            <p class="pl-1 text-gray-500">/ за ночь</p>
        </div>
    </div>
@endforeach
