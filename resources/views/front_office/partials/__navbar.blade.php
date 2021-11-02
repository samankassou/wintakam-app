<nav class="bg-first shadow-md fixed top-0 left-0 z-20 w-full" x-data="{showMenu: false}">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button" @click="showMenu = !showMenu">
                    <svg class="w-6 h-6 text-gray-100 hover:text-white" x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-100 hover:text-white"
                        x-show="showMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div>
                <!-- Website Logo -->
                <a href="/" class="flex items-center py-4 px-2">
                    <img src="{{ asset('front_office/images/logo-1.png') }}" alt="Logo"
                        class="h-10 mr-2">
                    <span class="font-semibold text-gray-100 text-lg sr-only">Navigation</span>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-3 ">
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home') }}"
                        class="py-4 px-2 text-green-400 border-b-4 border-green-500 font-semibold ">Accueil</a>
                    <a href="#"
                        class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Les
                        annonces</a>
                    @guest
                        <a href="{{ route('register') }}"
                            class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">S'inscrire</a>
                        <a href="{{ route('login') }}"
                            class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Se
                            connecter</a>
                    @endguest
                </div>

                <a href="#"
                    class="py-2 px-2 font-medium text-white bg-green-500 hover:bg-green-300 transition duration-300">Publier
                    une annonce</a>
            </div>

            <div class="relative flex justify-center flex-col" x-data="{showDropdown: false}">
                @auth
                <button @click="showDropdown = !showDropdown" class="flex relative w-8 h-8 rounded-full overflow-hidden">
                    @if (auth()->user()->getFirstMediaUrl('avatars'))
                        <img class="absolute inset-0 object-cover w-full h-full" src="{{ auth()->user()->getFirstMediaUrl('avatars') }}"
                            alt="User avatar">
                    @else
                        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('front_office/images/avatar-placeholder.png') }}"
                            alt="User avatar">
                    @endif
                </button>
                @endauth
                <div x-show="showDropdown" x-transition @click.away="showDropdown = false" class="absolute right-0 -bottom-20 rounded-md bg-gray-100 shadow-md w-32 p-3">
                    @auth
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="py-2 text-gray-700 text-sm block hover:text-green-700 transition-colors">Se
                        déconnecter</a>
                    <a href="#" class="py-2 text-gray-700 text-sm block hover:text-green-700 transition-colors">Mon profil</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endauth
                </div>
            </div>

        </div>
    </div>
    <!-- mobile menu -->
    <div class="mobile-menu" x-show="showMenu" x-transition>
        <ul>
            <li class="active"><a href="/"
                    class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Accueil</a></li>
            <li><a href="#" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Les
                    annonces</a></li>
            <li><a href="{{ route('register') }}"
                    class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">S'inscrire</a>
            </li>
            <li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Se
                    connecter</a></li>
            <li><a href="#"
                    class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Aide</a></li>
            <li>
                <a href="#"
                    class="block py-2 px-2 font-medium text-white hover:bg-green-300 transition duration-300">Publier
                    une annonce</a>
            </li>
        </ul>
    </div>
</nav>
