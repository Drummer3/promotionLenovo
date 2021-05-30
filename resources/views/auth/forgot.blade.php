<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <p class="text-center font-bold text-2xl mb-4">Reset Password</p>

        @if (isset($errors) && count($errors))
            <ul class="text-red-500 list-disc list-inside mb-2">
                <li>
                    {{ $errors[0] }}
                </li>
            </ul>
        @endif

        <form method="POST" action="{{ route('forgot') }}">
            @csrf

            <!-- User ID -->
            <div>
                <x-label for="userid" :value="__('User ID')" />

                <x-input id="userid" class="block mt-1 w-full" type="text" name="userid" :value="old('userid')" required
                    autofocus placeholder="userID" />
            </div>

            <!-- Phone Number -->
            <div class="mt-3">
                <x-label for="number" :value="__('Phone number')" />

                <x-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')"
                    required placeholder="+995555123456" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3 hover:bg-gray-300">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    <x-side-logo />
</x-guest-layout>
