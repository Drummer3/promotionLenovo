<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>გათამაშება 🎉</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body style="height: 100%;">
    <div style="height: 100%;">
        @if (Route::has('login'))
        <div style="height: 100%; align-items: center; justify-content: center; display: flex;">
            @auth
            <x-button class="myButton m-2 p-4 dark:hover:bg-red-300" style="padding: 2rem 3rem" onclick="location.href=' {{ url('/home') }} '">Home</x-button>
            @else
            <x-button class="myButton m-2 p-4 dark:hover:bg-red-300" style="padding: 2rem 3rem" onclick="location.href=' {{ route('login') }} '">Log In</x-button>

            @if (Route::has('register'))
            <x-button class="myButton m-2 dark:hover:bg-red-300" style="padding: 2rem 3rem" onclick="location.href=' {{ route('register') }} '">Register</x-button>

            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>