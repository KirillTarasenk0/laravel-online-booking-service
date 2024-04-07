<div class="pr-10 pt-10">
    <div>
        <img src="{{ asset('images/hotels/preview/room1.svg') }}" alt="Изображение комнаты отеля"/>
    </div>
    <h5 class="font-bold">{{ $hotelName }}</h5>
    <p class="text-gray-500 w-24">{{ $hotelAddress }}</p>
    <div class="flex bg-blue-100 p-2 ">
        <h6 class="font-bold text-blue-600">{{ $roomPrice }} ₽</h6>
        <p class="pl-1 text-gray-500 ">/ за ночь</p>
    </div>
    <div class="flex content-center pt-2">
        @auth
            <div>
                <form action="{{ route('bookRoom') }}" method="POST">
                    @csrf
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold pt-2 pb-2 pl-3 pr-3">
                        Забронировать
                    </button>
                </form>
            </div>
        @endauth
        <div class="pl-3">
            <form action="{{ route('hotel-room-description') }}" method="GET">
                @csrf
                <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold pt-2 pb-2 pl-3 pr-3">
                    Описание
                </button>
            </form>
        </div>
    </div>
</div>

