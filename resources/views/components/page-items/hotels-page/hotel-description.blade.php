<div class="pr-10 pt-10">
    <div>
        <img src="{{ asset('images/hotels/preview/room1.svg') }}" alt="Изображение комнаты отеля"/>
    </div>
    <h5 class="font-bold">{{ $hotelName }}</h5>
    <p>{{ $hotelAddress }}</p>
    <p class="text-gray-500 ">{{ $hotelDescription }}</p>
    <h6 class="font-bold text-blue-600">{{ $roomPrice }}₽ <span class="pl-1 text-gray-500">/ за ночь</span></h6>
    <p>Описание номера: {{ $roomDescription }}</p>
    <p>Вместимость номера:  {{ $roomCapacity }}</p>
    <form action="{{ route('index') }}">
        @csrf
        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold pt-2 pb-2 pl-4 pr-4">
            На главную страницу
        </button>
    </form>
</div>
