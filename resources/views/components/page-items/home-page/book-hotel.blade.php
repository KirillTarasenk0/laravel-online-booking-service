<section>
    <div>
        <div class="pt-20 pl-20">
            <h1 class="pb-10 font-bold text-5xl text-blue-500 w-1/2">Забронируйте уникальное жилье быстро и просто</h1>
            <p class="text-xl pb-20">Лучший способ арендовать квартиру</p>
        </div>
        <div>
            <form action="{{ route('find-room') }}" method="GET">
                @csrf
                <div class="flex justify-center content-center">
                    <div>
                        <div><label for="hotel__name">Название отеля</label></div>
                        <div><input name="hotelName" class="pr-20" id="hotel__name" type="text" placeholder="Отель"/></div>
                    </div>
                    <div>
                        <div><label for="entry__date">Дата заезда</label></div>
                        <div><input name="startDate" class="pr-20" id="entry__date" type="date"/></div>
                    </div>
                    <div>
                        <div><label for="leave__date">Дата отъезда</label></div>
                        <div><input name="endDate" class="pr-20" id="leave__date" type="date"/></div>
                    </div>
                    <div>
                        <div><label for="visitors__number">Количество человек</label></div>
                        <div><input name="visitorsNumber" class="pr-20" id="visitors__number" type="number" placeholder="Количество человек"/></div>
                    </div>
                    <div class="pt-6">
                        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold pt-2 pb-2 pl-16 pr-16" type="submit">
                            Начать поиск
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>
