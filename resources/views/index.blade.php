<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'გათამაშება 🎉') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="bg-gray-300 myFont">
    @if (Route::has('login'))
        <div class="flex flex-col h-screen items-center justify-center">
            <div class="flex flex-col sm:flex-row">
                @auth
                    <x-button class="text-lg m-2 py-8 px-12 hover:text-blue-400 text-white hover:bg-white bg-blue-400"
                        onclick="location.href= &quot; {{ route('home') }} &quot;">
                        @if (Auth::user()->type)
                            Dashboard
                        @else
                            Home
                        @endif
                    </x-button>
                @else
                    <x-button class="text-lg mb-12 sm:mb-0 sm:mx-6 py-8 px-12 hover:text-blue-400 text-white hover:bg-white bg-blue-400"
                        onclick="location.href='{{ route('login') }}';">Log In</x-button>
                    <x-button class="text-lg sm:mx-6 py-8 px-12 hover:text-blue-400 text-white hover:bg-white bg-blue-400"
                        onclick="location.href='{{ route('register') }}'">Register</x-button>
                @endauth
            </div>
        </div>
    @endif
    <x-side-logo />
</body>

</html>
