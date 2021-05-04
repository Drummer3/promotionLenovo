<div class="min-h-screen flex justify-evenly flex-col md:flex-row items-center py-6">
    <div class="flex flex-col w-auto">
        <div class="max-w-md">
            {{ $logo }}
        </div>

        <div class="mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg max-w-md">
            {{ $slot }}
        </div>
    </div>
    <div class="max-w-sm sm:max-w-md">
        <x-rules />
    </div>
</div>
