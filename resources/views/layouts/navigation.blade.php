<nav x-data="{ open: false }" class="border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto bg-black ">
        <div class="flex justify-between h-16">

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-white transition duration-150 ease-in-out">
                    <svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path :class="{'hidden': open, 'inline-flex': ! open }"
                            d="M24 0L6.66667 -1.51533e-06L6.66667 2.66666L24 2.66667L24 0ZM24 6.66667L10.6667 6.66666L10.6667 9.33333L24 9.33333L24 6.66667ZM24 16L24 13.3333L6.66667 13.3333L6.66667 16L24 16ZM1.11901e-06 3.2L4.8 8L2.79753e-07 12.8L1.86667 14.6667L8.53333 8L1.86667 1.33333L1.11901e-06 3.2Z"
                            fill="white" />

                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            d="M 2.79753e-7,0 17.33333,-1.51533e-6 V 2.66666 L 2.79753e-7,2.66667 Z m 0,6.66667 L 13.3333,6.66666 V 9.33333 H 2.79753e-7 Z m 0,9.33333 V 13.3333 H 17.33333 V 16 Z M 23.999999,3.2 19.2,8 24,12.8 22.13333,14.6667 15.46667,8 22.13333,1.33333 Z"
                            fill="#3e8ddd" />
                    </svg>
                </button>

                <p class="text-white text-sm leading-4 pl-2">Lenovo
                    <br />
                    <span class="font-bold text-lg">Promotion</span>
                </p>
            </div>

        </div>
    </div>


    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}">
        <div class="bg-blue-300 border border-white absolute">
            <div class="pt-2 pb-3 space-y-1">
                @if (Auth::user()->type)
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('deleted')" :active="request()->routeIs('deleted')">
                        {{ __('Deleted') }}
                    </x-responsive-nav-link>
                @else
                    <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('New Item') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('list')" :active="request()->routeIs('list')">
                        {{ __('My Submissions') }}
                    </x-responsive-nav-link>
                @endif
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="white"
                            viewBox="0 0 24 24" stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <div class="ml-3 pr-4">
                        <div class="font-medium text-base text-gray-900">{{ Auth::user()->name }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<x-side-logo />
