<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="text-gray-100 text-3xl h-16 px-8 rounded-md" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Full Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder=" " required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="userid" :value="__('User ID')" />

                <x-input id="userid" class="block mt-1 w-full" type="text" name="userid" :value="old('userid')" required />
            </div>

            <!-- Shop selector -->
            <div class="mt-4">
                <x-label for="shop" :value="__('Store Chain')" />

                <select id="shop" name="shop" class="block w-full rounded-md shadow-sm border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                    <option value="alta">Alta</option>
                    <option value="ee">Elit Electronics</option>
                </select>
            </div>

            <!-- Address Selector -->
            <div class="mt-4">
                <x-label for="branch" :value="__('Store branch')" />

                <select id="branch" name="branch" class="block w-full rounded-md shadow-sm border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                    <option value="saburtalo_cityMall">Saburtalo, City Mall</option>
                    <option value="ee">Elit Electronics</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already Registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
