<nav x-data="{ open: false }" class="bg-indigo-600 dark:bg-indigo-900 border-b border-indigo-400 dark:border-indigo-700">
    <!-- Primary Navigation Menu -->
    @php
        $role = auth()->user()->role;
    @endphp
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="flex justify-between h-20">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:text-indigo-200">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                @if ($role === 'admin')
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('buku.index')" :active="request()->routeIs('buku.index')" class="text-white hover:text-indigo-200">
                            {{ __('Data Buku') }}
                        </x-nav-link>
                    </div>
                @endif
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('peminjaman-buku.index')" :active="request()->routeIs('peminjaman-buku.index')" class="text-white hover:text-indigo-200">
                        {{ __('Pinjam Buku') }}
                    </x-nav-link>
                </div>

            </div>


            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:text-indigo-200 dark:bg-indigo-900 dark:hover:bg-indigo-700 focus:outline-none transition ease-in-out duration-150">
                            <div>({{ Auth::user()->kelas }} {{ Auth::user()->identitas }}) - {{ Auth::user()->nama }}
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-gray-800 dark:text-gray-200">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        @if ($role === 'admin')
                            <x-dropdown-link :href="route('settings.index')" class="text-gray-800 dark:text-gray-200">
                                {{ __('Pengaturan') }}
                            </x-dropdown-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                class="text-gray-800 dark:text-gray-200">
                                {{ __('Keluar') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-indigo-200 hover:text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:text-indigo-200">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-indigo-400 dark:border-indigo-700">
            <div class="px-4">
                <div class="font-medium text-base text-white">({{ Auth::user()->identity }})
                    {{ Auth::user()->nama }} - {{ Auth::user()->kelas }}</div>
                <div class="font-medium text-sm text-indigo-200">{{ Auth::user()->email }}</div>
            </div>




            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('peminjaman-buku.index')" class="text-white hover:text-indigo-200">
                    {{ __('Pinjam Buku') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('pengembalian-buku.index')" class="text-white hover:text-indigo-200">
                    {{ __('Pengembalian Buku') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white hover:text-indigo-200">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                @if ($role === 'admin')
                    <x-responsive-nav-link :href="route('settings.index')" class="text-white hover:text-indigo-200">
                        {{ __('Settings') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('laporan.index')" class="text-white hover:text-indigo-200">
                        {{ __('Laporan') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();"
                        class="text-white hover:text-indigo-200">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
