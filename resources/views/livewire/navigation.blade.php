<nav x-data="{ open: false }" class="bg-white border-b-4 border-b-indigo-800 sticky z-50 top-0">

    @include('partials.header')

    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-4 py-1">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex flex-shrink-0 items-center gap-2">
                    <a href="/">
                        <img class="block h-10 w-auto lg:hidden" src="/img/infotel.png" alt="">
                        <img class="hidden h-14 w-auto lg:block" src="/img/infotel.png" alt="">
                    </a>
                    <span>INFOTEL BUSINESS SAC</span>
                </div>

                <!-- Navigation Links -->
                <div
                    class="hidden space-x-4 md:-my-px md:ml-5 md:flex space-y-1 px-2 py-4 text-[0.875rem] font-medium text-gray-700 items-center">
                    <x-nav-link href="{{ route('inicio') }}" :active="request()->routeIs('inicio', 'inicio')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('nosotros') }}" :active="request()->routeIs('nosotros')">
                        {{ __('Nosotros') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('contactanos') }}" :active="request()->routeIs('contactanos')">
                        {{ __('Contáctanos') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('productos') }}" :active="request()->routeIs('productos', 'categoria-productos', 'producto-detalle')">
                        {{ __('Productos') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('galeria') }}" :active="request()->routeIs('galeria')">
                        {{ __('Galeria') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('blog-list') }}" :active="request()->routeIs('blog-list')">
                        {{ __('Blog') }}
                    </x-nav-link>
                    @role('Administrador')
                        <x-nav-link href="{{ route('sistema-dashboard') }}" target="_blank" :active="request()->routeIs('sistema-dashboard')">
                            {{ __('Sistema') }}
                        </x-nav-link>
                    @endrole
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center">
                <div class="hidden lg:flex items-center">
                    <div class="relative flex items-center text-gray-400 focus-within:text-indigo-700">
                        <span class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="search" placeholder="Buscar"
                            class="w-full pl-14 pr-4 py-2.5 rounded-lg text-sm text-gray-600 outline-none border border-gray-300 focus:border-indigo-700 focus:ring-indigo-700 shadow">
                    </div>
                </div>
               
                <button @click="open = ! open"
                    class="block md:hidden items-center justify-center p-2 rounded-md border bg-gray-100 focus:bg-gray-100 active:bg-gray-200">
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
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('inicio') }}" :active="request()->routeIs('inicio', 'inicio')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('nosotros') }}" :active="request()->routeIs('nosotros')">
                {{ __('Nosotros') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('contactanos') }}" :active="request()->routeIs('contactanos')">
                {{ __('Contáctanos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('productos') }}" :active="request()->routeIs(
                'productos',
                'categoria-productos',
                'productos.categoria',
                'productos/{productos}',
                'productos.detalle',
            )">
                {{ __('Productos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('galeria') }}" :active="request()->routeIs('galeria')">
                {{ __('Galeria') }}
            </x-responsive-nav-link>
            @role('Administrador')
                <x-responsive-nav-link href="{{ route('sistema-dashboard') }}" target="_blank" :active="request()->routeIs('sistema-dashboard')">
                    {{ __('Sistema') }}
                </x-responsive-nav-link>
            @endrole

        </div>
    </div>
</nav>
