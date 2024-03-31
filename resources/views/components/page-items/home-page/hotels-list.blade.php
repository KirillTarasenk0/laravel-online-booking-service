@foreach($hotels as $hotel)
    <div class="pr-10 pt-10">
        <div>
            <img src="{{ asset('images/hotels/preview/room1.svg') }}" alt="Изображение комнаты отеля"/>
        </div>
        <h5 class="font-bold">{{ $hotel->name }}</h5>
        <p class="text-gray-500">{{ $hotel->address }}</p>
        <div class="flex bg-blue-100 p-2 ">
            <h6 class="font-bold text-blue-600">8 990 ₽</h6>
            <p class="pl-1 text-gray-500">/ за ночь</p>
        </div>
    </div>
@endforeach
