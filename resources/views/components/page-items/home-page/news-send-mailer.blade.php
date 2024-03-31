<section>
    <div class="flex justify-center content-center items-center mt-12 mb-12">
        <div class="bg-blue-200 p-12">
            <h2 class="font-bold text-blue-600 text-5xl mb-6">Новостная рассылка</h2>
            <p class="text-2xl mb-6">Подписка на новости, акции и скидки</p>
            <div>
                <form action="">
                    @csrf
                    <input class="" type="email" placeholder="введите ваш email"/>
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold pt-2 pb-2 pl-16 pr-16" type="submit">Подписаться</button>
                </form>
            </div>
            <p class="mt-4 w-3/4">Нажимая «Подписаться», вы соглашаетесь с правилами использования сервиса и обработки персональных данных</p>
        </div>
    </div>
</section>
