<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'გათამაშება 🎉') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    @if (Route::has('login'))
        <div class="flex flex-col h-screen items-center justify-center">
            <div class="flex flex-col sm:flex-row">
                @auth
                    <x-button class="myButton m-2 py-8 px-12 dark:hover:bg-red-300"
                        onclick="location.href= &quot; {{ route('home') }} &quot;">
                        @if (Auth::user()->type)
                            Dashboard
                        @else
                            Home
                        @endif
                    </x-button>
                @else
                    <x-button class="myButton mb-12 sm:mb-0 sm:mx-6 py-8 px-12 dark:hover:bg-red-300"
                        onclick="location.href='{{ route('login') }}';">Log In</x-button>
                    <x-button class="myButton sm:mx-6 py-8 px-12 dark:hover:bg-red-300"
                        onclick="location.href='{{ route('register') }}'">Register</x-button>
                @endauth
            </div>
        </div>
    @endif
    <div class="fixed bottom-28 right-0">
        <a href="/">
            <img src="{{ asset('images/Logo.png') }}" alt="logo" class="transform -rotate-90 translate-x-12 h-12">
        </a>
    </div>
</body>

</html>
