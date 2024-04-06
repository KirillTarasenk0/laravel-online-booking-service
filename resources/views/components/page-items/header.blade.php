<header class="pl-14 pr-14 pt-3 pb-5">
    <div class="flex justify-between content-center">
        <div>
            <img src="{{ asset('images/icons/logos/logo.svg') }}" alt="Website logo"/>
        </div>
        <div class="pt-4">
            <div>
                <a class="font-bold" href="tel:+7 (495) 677-17-79">+7 (495) 677-17-79</a>
            </div>
            <p class="mt-2">Ежедневно с 10:00 до 20:00</p>
        </div>
        <div class="flex justify-between content-center pt-4">
            <div class="mr-4">
                <a href="#"><img src="{{ asset('images/icons/socialnetworks/facebook-icon.svg') }}" alt="Facebook logo"/></a>
            </div>
            <div class="mr-4">
                <a href="#"><img src="{{ asset('images/icons/socialnetworks/vk-icon.svg') }}" alt="VK logo"/></a>
            </div>
            <div>
                <a href="#"><img src="{{ asset('images/icons/socialnetworks/instagram-icon.svg') }}" alt="Instagram logo"/></a>
            </div>
        </div>
        <div class="flex justify-between content-center mt-6 border-2 pt-2.5 pl-3 pr-3 pb-2.5">
            <div class="flex justify-between content-center">
                <div>
                    <img src="{{ asset('images/icons/russiaicon.svg') }}" alt="Russian flag"/>
                </div>
                <h4 class="ml-3 border-r-2 pr-5">RUS</h4>
            </div>
            <div class="ml-5">
                <h4>Руб.</h4>
            </div>
        </div>
        <div class="flex justify-between content-center pt-7">
            <div>
                <img src="{{ asset('images/icons/profile.svg') }}" alt="User profile">
            </div>
            <div class="mt-1 ml-2">
                @guest
                    <form action="{{ route('register') }}" method="GET">
                        @csrf
                        <button class="font-bold">Личный кабинет</button>
                    </form>
                @endguest
                @php
                    use Illuminate\Support\Facades\Auth;
                @endphp
                @auth
                        <form action="{{ route('verification.notice')  }}" method="GET">
                            <button>{{ Auth::user()->name}}</button>
                        </form>
                @endauth
            </div>
        </div>
    </div>
</header>
