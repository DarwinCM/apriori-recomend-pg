{{-- <div>
    <div>asd</div>
    <div
        class="lg:flex md:flex md:justify-between items-center lg:justify-between bg-gray-200 text-[0.75rem] md:text-[0.875rem] px-8 py-1 sm:flex-none">

        <div class="w-6/12">
            <div class="w-6/6 flex justify-between items-center">
                <div>
                    aaa
                </div>
                <div class="flex gap-8 items-end justify-end">
                    <x-responsive-nav-link href="{{ route('inicio') }}" :active="request()->routeIs('inicio', 'inicio')">
                        {{ __('Inicio') }}
                    </x-responsive-nav-link>

                    @auth
                        <x-responsive-nav-link href="{{ route('inicio') }}" :active="request()->routeIs('inicio', 'inicio')">
                            {{ __('Favoritos') }}
                        </x-responsive-nav-link>
                    @endauth
                </div>

            </div>
        </div>

        <div class="flex gap-3 justify-center items-center">
            @auth
                <div class="sm:flex sm:items-center">
                    <!-- Settings Dropdown -->
                    <div class="relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex">
                                    <button aria-label="user"
                                        class="px-3 py-1 flex items-center gap-2 rounded-lg border border border-black active:bg-zinc-700 active:text-white">
                                        <i class="fa-solid fa-user"></i>
                                        {{ Auth::user()->name }}
                                        <i class="fa-solid fa-chevron-down fa-xs ml-2 -mr-0.5"></i>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="px-4 py-2 bg-gray-100 -mt-1 rounded-t-md text-center">
                                    <div class="font-medium text-sm text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-xs text-gray-500">{{ Auth::user()->email }}</div>
                                </div>
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Administrar Cuenta') }}
                                </div>

                                <x-dropdown-link href="{{ route('profile.show') }}" target="_blank">
                                    {{ __('Perfil') }}
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            @else
                <a href="/login"
                    class="px-3 py-1 flex items-center gap-2 rounded-lg border border-black active:bg-zinc-700 active:text-white">
                    <i class="fa-solid fa-user"></i>
                    Iniciar sesión
                </a>

                <a href="/register"
                    class="px-3 py-1 flex items-center gap-2 rounded-lg border border-black active:bg-zinc-700 active:text-white">
                    <i class="fa-solid fa-user"></i>
                    Registrate
                </a>
            @endauth
        </div>
    </div>
</div> --}}

<div>
    <div class="relative w-full">
        <a class="relative">
            <div class="gradiantenav absolute w-full ">
                <div class="flex justify-center items-center">
                    <div class="container">

                        <div class="xl:mx-50 lg:mx-20 md:mx-10 sm:mx-20 font-sans">
                            <div class="min-h-[45rem] max-h-[45rem]">
                                <div class="flex flex-col justify-between w-12/12">
                                    <div class=" flex justify-between items-center w-12/12 py-8">
                                        <div>
                                            aaa
                                        </div>
                                        <div class="flex gap-10 text-white">
                                            <a href="{{ route('inicio') }}"> Inicio </a>
                                            <a> Categorias </a>

                                            @auth
                                                <a href="{{ route('inicio') }}"> Favoritos</a>
                                                <a href="{{ route('recoment') }}"> Recomendaciones</a>
                                            @endauth
                                        </div>
                                        <div class="flex gap-3 justify-center items-center">
                                            @auth
                                                <div class="sm:flex sm:items-center">
                                                    <!-- Settings Dropdown -->
                                                    <div class="relative">
                                                        <x-dropdown align="right" width="48">
                                                            <x-slot name="trigger">
                                                                <span class="inline-flex">
                                                                    <button aria-label="user"
                                                                        class="px-3 py-1 flex items-center gap-2 rounded-lg border border border-black active:bg-zinc-700 active:text-white">
                                                                        <i class="fa-solid fa-user"></i>
                                                                        {{ Auth::user()->name }}
                                                                        <i
                                                                            class="fa-solid fa-chevron-down fa-xs ml-2 -mr-0.5"></i>
                                                                    </button>
                                                                </span>
                                                            </x-slot>

                                                            <x-slot name="content">
                                                                <!-- Account Management -->
                                                                <div
                                                                    class="px-4 py-2 bg-gray-100 -mt-1 rounded-t-md text-center">
                                                                    <div class="font-medium text-sm text-gray-800">
                                                                        {{ Auth::user()->name }}</div>
                                                                    <div class="font-medium text-xs text-gray-500">
                                                                        {{ Auth::user()->email }}</div>
                                                                </div>
                                                                <!-- Account Management -->
                                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                                    {{ __('Administrar Cuenta') }}
                                                                </div>

                                                                <x-dropdown-link href="{{ route('profile.show') }}"
                                                                    target="_blank">
                                                                    {{ __('Perfil') }}
                                                                </x-dropdown-link>

                                                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                                    <x-dropdown-link
                                                                        href="{{ route('api-tokens.index') }}">
                                                                        {{ __('API Tokens') }}
                                                                    </x-dropdown-link>
                                                                @endif

                                                                <div class="border-t border-gray-100"></div>

                                                                <form method="POST" action="{{ route('logout') }}" x-data>
                                                                    @csrf

                                                                    <x-dropdown-link href="{{ route('logout') }}"
                                                                        @click.prevent="$root.submit();">
                                                                        {{ __('Log Out') }}
                                                                    </x-dropdown-link>
                                                                </form>
                                                            </x-slot>
                                                        </x-dropdown>
                                                    </div>
                                                </div>
                                            @else
                                                <a href="/login"
                                                    class="px-3 text-white py-1 flex items-center gap-2 rounded-lg border border-white active:bg-zinc-700 active:text-gray-200">
                                                    <i class="fa-solid fa-user"></i>
                                                    Iniciar sesión
                                                </a>
                                            @endauth
                                        </div>
                                    </div>
                                    <div class="w-6/12 flex flex-col gap-6 pt-[10rem]">
                                        <p class="text-[#F26D35] font-extrabold text-sm xl:text-5xl md:text-lg ">
                                            Online Learning Anytime, Anywhere!
                                        </p>
                                        <p class="text-white  text-sm">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse veritatis
                                            omnis tempore, quidem vel corrupti possimus fuga natus corporis sit.
                                            Deserunt architecto, magni nam nostrum odio sit! Distinctio, iste
                                            aspernatur.
                                        </p>
                                        <div class="pr-[10rem] flex">
                                            <div class=" mr-1 w-full py-4 px-6  rounded-full flex justify-between"
                                                style="background: rgba(255, 255, 255, 0.192);">
                                                <h1 class="text-white text-sm">
                                                    Search
                                                </h1>
                                                <h1
                                                    class="text-white text-sm bg-[#F26D35] rounded-full w-5 h-5 text-center">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <img class="w-full min-h-[45rem] max-h-[45rem] object-cover " src="/img/header-slide.jpg" />
        </a>
    </div>
    <style>
        .gradiantenav {
            background: rgba(0, 0, 0, 0.712);
        }
    </style>
</div>
