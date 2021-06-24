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
    @include('layouts.guestNavbar')

    @if (Route::has('login'))
        <div class="flex flex-col h-screen items-center justify-center">
            <div class="flex flex-col items-center" >


                {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
                    <div class="bg-white overflow-hidden shadow-sm">
                        <div class="p-0 bg-white border-gray-200 sm:p-4 sm:pt-0">
                            This is official Lenovo Georgia's promotion or sth idk
                            dsakfhasofha aspoidjaos dsaoijdsaoijd dsaoid hsdsaoi hsao hosaihdsoahdosa hdsaoihd asoidh oisa hdsaoi
                        </div>
                    </div>
                </div> --}}



                
                <div class="flex flex-col sm:flex-row">
                    @auth
                        <x-button class="text-sm border justify-center opacity-80 border-blue-900 m-2 py-6 px-12 text-blue-900 hover:bg-blue-300 bg-white"
                            onclick="location.href= &quot; {{ route('home') }} &quot;">
                            @if (Auth::user()->type)
                                Dashboard
                            @else
                                Home
                            @endif
                        </x-button>
                    @else
                        <x-button class="text-sm border justify-center opacity-90 border-blue-900 m-2 py-6 px-12 text-blue-900 hover:bg-blue-300 bg-white" onclick="location.href='{{ route('login') }}';">
                            Log In
                        </x-button>
                        <x-button class="text-sm border justify-center opacity-90 border-blue-900 m-2 py-6 px-12 text-blue-900 hover:bg-blue-300 bg-white"
                            onclick="location.href='{{ route('register') }}'">Register</x-button>
                    @endauth
                </div>



            </div>
        </div>
    @endif
    <x-side-logo />
</body>

</html>
