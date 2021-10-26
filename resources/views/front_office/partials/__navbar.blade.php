<nav class="bg-first shadow-md fixed top-0 left-0 z-20 w-full" x-data="{showMenu: false}">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button" @click="showMenu = !showMenu">
                    <svg class="w-6 h-6 text-gray-100 hover:text-white"
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-100 hover:text-white" x-show="showMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
                <div>
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="{{ asset('front_office/images/logo-1.png') }}" alt="Logo" class="h-10 mr-2">
                        <span class="font-semibold text-gray-100 text-lg sr-only">Navigation</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-3 ">
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('home') }}" class="py-4 px-2 text-green-400 border-b-4 border-green-500 font-semibold ">Accueil</a>
                        <a href="#" class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Les annonces</a>
                        @guest
                            <a href="{{ route('register') }}" class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">S'inscrire</a>
                            <a href="{{ route('login') }}" class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Se connecter</a>
                        @endguest
                        @auth
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Se déconnecter</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                    </div>

                    <a href="#" class="py-2 px-2 font-medium text-white bg-green-500 hover:bg-green-300 transition duration-300">Publier une annonce</a>
                </div>

                <div class="md:hidden flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-100 hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

            </div>
        </div>
        <!-- mobile menu -->
        <div class="mobile-menu" x-show="showMenu" x-transition>
            <ul class="">
                <li class="active"><a href="#" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Accueil</a></li>
                <li><a href="#" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Les annonces</a></li>
                <li><a href="#" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">S'inscrire</a></li>
                <li><a href="#" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Se connecter</a></li>
                <li><a href="#" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Aide</a></li>
                <li>
                    <a href="#" class="block py-2 px-2 font-medium text-white hover:bg-green-300 transition duration-300">Publier une annonce</a>
                </li>
            </ul>
        </div>
    </nav>
