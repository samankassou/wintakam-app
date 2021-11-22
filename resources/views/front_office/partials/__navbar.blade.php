<nav class="fixed top-0 left-0 z-20 w-full shadow-md bg-first" x-data="{showMenu: false}">
    <div class="max-w-6xl px-4 mx-auto">
        <div class="flex justify-between">
            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button class="outline-none mobile-menu-button" @click="showMenu = !showMenu">
                    <x-icon name="menu" class="w-6 h-6 text-gray-100 hover:text-white" x-show="!showMenu" />
                    <x-icon name="x" class="w-6 h-6 text-gray-100 hover:text-white" x-cloak x-show="showMenu" />
                </button>
            </div>
            <div>
                <!-- Website Logo -->
                <a href="/" class="flex items-center px-2 py-4">
                    <img src="{{ asset('front_office/images/logo-1.png') }}" alt="Logo"
                        class="h-10 mr-2">
                    <span class="text-lg font-semibold text-gray-100 sr-only">Navigation</span>
                </a>
            </div>
            <div class="items-center hidden space-x-3 md:flex ">
                <div class="items-center hidden space-x-1 md:flex">
                    <a href="{{ route('home') }}"
                        class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300 @if(request()->routeIs('home')) text-green-400 border-green-500 font-semibold @endif">Accueil</a>
                    @auth
                        <a href="#"
                            class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300 @if(request()->routeIs('adverts.index')) text-green-400 border-green-500 font-semibold @endif">Favoris <livewire:front.adverts.bookmark-count /></a>
                        <a href="{{ route('adverts.me') }}"
                            class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300 @if(request()->routeIs('adverts.me')) text-green-400 border-green-500 font-semibold @endif">Mes annonces</a>
                    @endauth
                    <a href="{{ route('adverts.index') }}"
                        class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300 @if(request()->routeIs('adverts.index')) text-green-400 border-green-500 font-semibold @endif">Les
                        annonces</a>
                    @guest
                        <a href="{{ route('register') }}"
                            class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300 @if(request()->routeIs('register')) text-green-400 border-green-500 font-semibold @endif">S'inscrire</a>
                        <a href="{{ route('login') }}"
                            class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300 @if(request()->routeIs('login')) text-green-400 border-green-500 font-semibold @endif">Se
                            connecter</a>
                    @endguest
                </div>

                <a href="{{ route('adverts.create') }}"
                    class="px-2 py-2 font-medium text-white transition duration-300 bg-green-500 hover:bg-green-300">Publier
                    une annonce</a>
            </div>

            <div class="relative flex flex-col justify-center" x-data="{showDropdown: false}">
                @auth
                <button @click="showDropdown = !showDropdown" class="relative flex w-8 h-8 overflow-hidden rounded-full">
                    @if (auth()->user()->getFirstMediaUrl('avatars'))
                        <img class="absolute inset-0 object-cover w-full h-full" src="{{ auth()->user()->getFirstMediaUrl('avatars') }}"
                            alt="User avatar">
                    @else
                        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('front_office/images/avatar-placeholder.png') }}"
                            alt="User avatar">
                    @endif
                </button>
                @endauth
                <div x-show="showDropdown" x-cloak x-transition @click.away="showDropdown = false" class="absolute right-0 p-3 bg-gray-100 rounded-md shadow-md -bottom-20 w-36">
                    @auth
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block py-2 text-sm text-gray-700 transition-colors hover:text-green-700">Se
                        déconnecter</a>
                    <a href="#" class="block py-2 text-sm text-gray-700 transition-colors hover:text-green-700">Mon profil</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endauth
                </div>
            </div>

        </div>
    </div>
    <!-- mobile menu -->
    <div class="z-50 mobile-menu" x-show="showMenu" x-cloak x-transition>
        <ul>
            <li><a href="/"
                    class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300 @if(request()->routeIs('home')) bg-green-500 font-semibold @endif">Accueil</a></li>
            <li><a href="{{ route('adverts.index') }}" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300 @if(request()->routeIs('adverts.index')) bg-green-500 font-semibold @endif">Les
                    annonces</a></li>
            @auth
                <li><a href="#"
                        class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300 @if(request()->routeIs('adverts.me')) bg-green-500 font-semibold @endif">
                        Favoris
                        <livewire:front.adverts.bookmark-count /></a></li>
                <li><a href="{{ route('adverts.me') }}"
                        class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300 @if(request()->routeIs('adverts.me')) bg-green-500 font-semibold @endif">Mes
                        annonces</a></li>
            @endauth
            @guest
                <li><a href="{{ route('register') }}"
                        class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300 @if(request()->routeIs('register')) bg-green-500 font-semibold @endif">S'inscrire</a>
                </li>
                <li><a href="{{ route('login') }}"
                        class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300 @if(request()->routeIs('login')) bg-green-500 font-semibold @endif">Se
                        connecter</a></li>
            @endguest
            <li><a href="#"
                    class="block px-2 py-4 text-sm text-white transition duration-300 hover:bg-green-500">Aide</a></li>
            <li>
                <a href="{{ route('adverts.create') }}"
                    class="block px-2 py-2 font-medium text-white transition duration-300 hover:bg-green-300">Publier
                    une annonce</a>
            </li>
        </ul>
    </div>
</nav>
