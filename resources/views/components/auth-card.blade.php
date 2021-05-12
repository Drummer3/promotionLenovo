<div class="min-h-screen flex justify-evenly flex-col lg:flex-row items-center py-6">
    <div class="flex flex-col w-96">
        <div class="max-w-md">
            {{ $logo }}
        </div>

        <div class="mt-6 px-6 py-4 bg-white shadow-md overflow-hidden max-w-md">
            {{ $slot }}
        </div>
    </div>

    @if (Request::is('login') || Request::is('register'))

    <div class="max-w-sm lg:max-w-md w-96 lg:w-auto">
        <x-rules />
    </div>
        
    @endif

</div>
