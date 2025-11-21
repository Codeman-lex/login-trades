<nav x-data="{ open: false }" class="bg-luxury-navy/80 backdrop-blur-md border-b border-luxury-gold/10 sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="/images/logo.png" alt="Logo" class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-luxury-white hover:text-luxury-gold border-transparent hover:border-luxury-gold">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('case-studies')" :active="request()->routeIs('case-studies')" class="text-luxury-white hover:text-luxury-gold border-transparent hover:border-luxury-gold">
                        {{ __('Case Studies') }}
                    </x-nav-link>
                    <x-nav-link :href="route('technology')" :active="request()->routeIs('technology')" class="text-luxury-white hover:text-luxury-gold border-transparent hover:border-luxury-gold">
                        {{ __('Technology') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-luxury-white hover:text-luxury-gold bg-transparent focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="bg-luxury-navy border border-luxury-gold/10">
                            <x-dropdown-link :href="route('profile.edit')" class="text-luxury-white hover:bg-luxury-gold/10 hover:text-luxury-gold">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="text-luxury-white hover:bg-luxury-gold/10 hover:text-luxury-gold">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-luxury-white hover:text-luxury-gold hover:bg-luxury-navy/50 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-luxury-navy/90 backdrop-blur-xl">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-luxury-white hover:text-luxury-gold hover:bg-luxury-gold/5 border-l-4 border-transparent hover:border-luxury-gold">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('case-studies')" :active="request()->routeIs('case-studies')" class="text-luxury-white hover:text-luxury-gold hover:bg-luxury-gold/5 border-l-4 border-transparent hover:border-luxury-gold">
                {{ __('Case Studies') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('technology')" :active="request()->routeIs('technology')" class="text-luxury-white hover:text-luxury-gold hover:bg-luxury-gold/5 border-l-4 border-transparent hover:border-luxury-gold">
                {{ __('Technology') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-luxury-gold/10">
            <div class="px-4">
                <div class="font-medium text-base text-luxury-gold">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-luxury-white/60">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-luxury-white hover:text-luxury-gold hover:bg-luxury-gold/5">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-luxury-white hover:text-luxury-gold hover:bg-luxury-gold/5">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
