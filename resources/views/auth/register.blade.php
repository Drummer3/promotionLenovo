<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>
        <p class="text-center font-bold text-2xl mb-4">Register</p>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Full Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder=" " required autofocus />
            </div>

            <!-- User ID -->
            <div class="mt-4">
                <x-label for="userid" :value="__('User ID')" />

                <x-input id="userid" class="block mt-1 w-full" type="text" name="userid" :value="old('userid')"
                    required />
            </div>

            <!-- Number -->
            <div class="mt-4">
                <x-label for="number" :value="__('Number')" />

                <x-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" required />
            </div>

            <!-- Shop selector -->
            <div class="mt-4">
                <x-label for="shop" :value="__('Store Chain')" />

                <select id="shop" name="shop"
                    class="block w-full shadow-sm border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                    <option></option>
                    <option value="alta">Alta</option>
                    <option value="elitElectronics">Elit Electronics</option>
                    <option value="zoommer">Zoommer</option>
                    <option value="beko">Beko</option>
                    <option value="megatechnica">Megatechnica</option>
                    <option value="metromart">Metromart</option>
                    <option value="pcshop">PC Shop</option>
                </select>
            </div>

            <!-- Address Selector -->
            <div class="mt-4">
                <x-label for="branch" :value="__('Store branch')" />

                <select id="branch" name="branch"
                    class="block w-full shadow-sm border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50">

                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already Registered?') }}
                </a>

                <x-button class="ml-4 hover:bg-gray-300">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    <x-side-logo />
</x-guest-layout>
