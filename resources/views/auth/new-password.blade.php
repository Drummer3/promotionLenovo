<x-guest-layout>
    <x-auth-card>

        <p class="text-center font-bold text-2xl mb-4">New Password</p>

        @if (isset($errors) && count($errors))
            <ul class="text-red-500 list-disc mb-2">
                <li>
                    {{ $errors[0] }}
                </li>
            </ul>
        @endif

        <form method="POST" action="/update-password">
            @csrf
            <input type="text" name="userid" value="{{ $userid }}" hidden>
            <input type="text" name="number" value="{{ $number }}" hidden>
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
                <x-button class="ml-3 hover:bg-gray-300">
                    {{ __('Update Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    <x-side-logo />
</x-guest-layout>
