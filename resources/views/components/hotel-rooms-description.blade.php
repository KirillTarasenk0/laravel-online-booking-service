<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelto | Hotel Rooms Description</title>
    <link rel="icon" href={{ asset('images/icons/logos/logo.svg') }} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    @vite('resources/css/app.css')
</head>
<body>
    <x-page-items.header/>
    <main>
        <x-page-items.home-page.menu/>
        <section>
            <div class="flex justify-center content-center">
                <x-page-items.hotels-page.hotel-description
                    :hotelName="$hotelName"
                    :hotelDescription="$hotelDescription"
                    :hotelAddress="$hotelAddress"
                    :roomDescription="$roomDescription"
                    :roomCapacity="$roomCapacity"
                    :roomPrice="$roomPrice"
                />
            </div>
        </section>
    </main>
</body>
</html>
