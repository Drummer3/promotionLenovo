<x-guest-layout>
    <x-auth-card>
        <p class="text-center font-bold text-2xl mb-4">Login</p>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="userid" :value="__('User ID')" />

                <x-input id="userid" class="block mt-1 w-full" type="text" name="userid" :value="old('userid')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="border-gray-300 shadow-sm"
                        name="remember" checked>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-xs" href="/forgot-password">Forgot Password?</a>
                <x-button class="ml-3 hover:bg-gray-300">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    <x-side-logo />
</x-guest-layout>