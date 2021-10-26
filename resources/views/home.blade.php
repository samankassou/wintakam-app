@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('front_office/css/home.css') }}">
    <style>
        header {
            background:url('/front_office/images/home/bg-sm.jpg');
        }
        @media screen and (min-width: 768px){
            header{
                background:url('/front_office/images/home/bg-md.jpg');
            }
        }
        @media screen and (min-width: 992px){
            header{
                background:url('/front_office/images/home/bg-xl.jpg');
            }
        }
        .c-card img{
            transition: transform .3s ease-in-out;
        }
        .c-card:hover img{
            transform: scale(1.05);
        }

    </style>
@endpush

@section('content')
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
                        <!-- Secondary Navbar items -->
                        <div class="hidden md:flex items-center space-x-3 ">
                            <!-- Primary Navbar items -->
                            <div class="hidden md:flex items-center space-x-1">
                                <a href="#" class="py-4 px-2 text-green-400 border-b-4 border-green-500 font-semibold ">Accueil</a>
                                <a href="#" class="py-4 px-2 text-gray-100 font-semibold border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Les annonces</a>
                                <a href="#" class="py-4 px-2 text-gray-100 font-semibold border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">S'inscrire</a>
                                <a href="#" class="py-4 px-2 text-gray-100 font-semibold border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Se connecter</a>
                            </div>

                            <a href="" class="py-2 px-2 font-medium text-white bg-green-500 hover:bg-green-300 transition duration-300">Publier une annonce</a>
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

            <header class="bg-center bg-fixed bg-no-repeat bg-cover h-screen relative">
            <!-- Overlay Background + Center Control -->
            <div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
                <div class="mx-2 text-center">
                    <h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl">
                        Sur <span class="text-green-500">Wintakam</span>,
                    </h1>
                <h2 class="text-gray-200 font-extrabold text-3xl xs:text-4xl md:text-5xl leading-tight">
                    trouvez assez <span class="text-white">facilement</span> un logement
                </h2>
                <div class="inline-flex sm:w-5/6 md:w-4/6 mt-4 sm:mt-6 md:mt-8 relative">
                    <span class="w-auto flex justify-end items-center absolute left-0 top-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500 p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input class="w-full py-2 pl-8" type="search" placeholder="Entrez le nom d'une ville">
                    <button class="bg-first hover:bg-green-500 text-white py-2 pl-4 pr-4">
                            <p class="font-semibold text-xs md:text-sm">RECHERCHER</p>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <main class="bg-gray-50 w-full">
        <section class="max-w-6xl mx-auto px-4">
            <h2 class="py-5 sm:py-6 md:py-7 lg:py-8 text-center font-bold text-2xl xs:text-3xl md:text-4xl text-green-500">Dernières annonces</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-3 justify-items-center">
                <article class="max-w-sm md:max-w-none c-card md:flex bg-white shadow-md hover:shadow-xl rounded-lg md:rounded-none overflow-hidden">
                    <div class="relative pb-48 overflow-hidden md:w-full">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/house-2.jpg') }}" alt="house">
                    </div>
                    <div class="p-4">
                        <h2 class="font-bold md:text-xl my-2 flex justify-between items-center">
                            Maloum Appartement
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </h2>
                        <div class="flex mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            laborum pariatur sunt repellat neque itaque reiciendis totam nihil fugit quidem! Porr...
                        </p>
                        <p class="mt-2 font-bold text-xl mb-3">
                            700 000 <span class="text-sm font-semibold">FCFA/mois</span>
                        </p>
                        <div class="py-4 border-t border-b text-xs text-gray-700">
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Publiée le 20, Octobre 2021</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Bastos, Yaoundé</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>vérifié</span>
                            </p>
                        </div>
                        <div class="bg-first text-gray-50 text-center text-sm py-2 hover:bg-green-500 transition-colors cursor-pointer">
                            Plus de détails
                        </div>
                    </div>
                </article>
                <article class="max-w-sm md:max-w-none c-card md:flex bg-white shadow-md hover:shadow-xl rounded-lg md:rounded-none overflow-hidden">
                    <div class="relative pb-48 overflow-hidden md:w-full">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/house-3.jpeg') }}" alt="house">
                    </div>
                    <div class="p-4">
                        <h2 class="font-bold md:text-xl my-2 flex justify-between items-center">
                            Résidence le CARAT
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </h2>
                        <div class="flex mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            laborum pariatur sunt repellat neque itaque reiciendis totam nihil fugit quidem! Porr...
                        </p>
                        <p class="mt-2 font-bold text-xl mb-3">
                            850 000 <span class="text-sm font-semibold">FCFA/mois</span>
                        </p>
                        <div class="py-4 border-t border-b text-xs text-gray-700">
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Publiée le 20, Octobre 2021</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Bastos, Yaoundé</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>vérifié</span>
                            </p>
                        </div>
                        <div class="bg-first text-gray-50 text-center text-sm py-2 hover:bg-green-500 transition-colors cursor-pointer">
                            Plus de détails
                        </div>
                    </div>
                </article>
                <article class="max-w-sm md:max-w-none c-card md:flex bg-white shadow-md hover:shadow-xl rounded-lg md:rounded-none overflow-hidden">
                    <div class="relative pb-48 overflow-hidden md:w-full">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/house-4.jpeg') }}" alt="house">
                    </div>
                    <div class="p-4">
                        <h2 class="font-bold md:text-xl my-2 flex justify-between items-center">
                            Villa John Doe
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </h2>
                        <div class="flex mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            laborum pariatur sunt repellat neque itaque reiciendis totam nihil fugit quidem! Porr...
                        </p>
                        <p class="mt-2 font-bold text-xl mb-3">
                            620 000 <span class="text-sm font-semibold">FCFA/mois</span>
                        </p>
                        <div class="py-4 border-t border-b text-xs text-gray-700">
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Publiée le 20, Octobre 2021</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Bastos, Yaoundé</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>vérifié</span>
                            </p>
                        </div>
                        <div class="bg-first text-gray-50 text-center text-sm py-2 hover:bg-green-500 transition-colors cursor-pointer">
                            Plus de détails
                        </div>
                    </div>
                </article>
                <article class="max-w-sm md:max-w-none c-card md:flex bg-white shadow-md hover:shadow-xl rounded-lg md:rounded-none overflow-hidden">
                    <div class="relative pb-48 overflow-hidden md:w-full">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/house-5.jpeg') }}" alt="house">
                    </div>
                    <div class="p-4">
                        <h2 class="font-bold md:text-xl my-2 flex justify-between items-center">
                            Villa Senghor de Valdo
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </h2>
                        <div class="flex mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            laborum pariatur sunt repellat neque itaque reiciendis totam nihil fugit quidem! Porr...
                        </p>
                        <p class="mt-2 font-bold text-xl mb-3">
                            410 000 <span class="text-sm font-semibold">FCFA/mois</span>
                        </p>
                        <div class="py-4 border-t border-b text-xs text-gray-700">
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Publiée le 20, Octobre 2021</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Bastos, Yaoundé</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>vérifié</span>
                            </p>
                        </div>
                        <div class="bg-first text-gray-50 text-center text-sm py-2 hover:bg-green-500 transition-colors cursor-pointer">
                            Plus de détails
                        </div>
                    </div>
                </article>
                <article class="max-w-sm md:max-w-none c-card md:flex bg-white shadow-md hover:shadow-xl rounded-lg md:rounded-none overflow-hidden">
                    <div class="relative pb-48 overflow-hidden md:w-full">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/house-1.jpg') }}" alt="house">
                    </div>
                    <div class="p-4">
                        <h2 class="font-bold md:text-xl my-2 flex justify-between items-center">
                            Cité Salvator
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </h2>
                        <div class="flex mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            laborum pariatur sunt repellat neque itaque reiciendis totam nihil fugit quidem! Porr...
                        </p>
                        <p class="mt-2 font-bold text-xl mb-3">
                            50 000 <span class="text-sm font-semibold">FCFA/mois</span>
                        </p>
                        <div class="py-4 border-t border-b text-xs text-gray-700">
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Publiée le 20, Octobre 2021</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Bastos, Yaoundé</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>vérifié</span>
                            </p>
                        </div>
                        <div class="bg-first text-gray-50 text-center text-sm py-2 hover:bg-green-500 transition-colors cursor-pointer">
                            Plus de détails
                        </div>
                    </div>
                </article>
            </div>
            <a href="#" class="block mt-3 sm:mt-5 md:mt-8 w-40 mx-auto text-sm text-center hover:text-green-500 border-green-500 border hover:bg-gray-50 transition-colors text-gray-50 bg-green-500 py-2 px-3 font-semibold">Voir Plus...</a>
        </section>
        <section class="max-w-6xl mx-auto px-4 mt-5">
            <h2 class="py-5 sm:py-6 md:py-7 lg:py-8 text-center font-bold text-2xl xs:text-3xl md:text-4xl text-green-500">Annonces publiées dans vos villes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-3 justify-items-center">
                <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/buea.jpg') }}" alt="city">
                    <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">Buéa</p>
                </article>
                <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/Douala.jpg') }}" alt="city">
                    <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">Douala</p>
                </article>
                <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/maroua.jpg') }}" alt="city">
                    <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">Maroua</p>
                </article>
                <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/Gra.jpg') }}" alt="city">
                    <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">Garoua</p>
                </article>
                <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/yaounde.jpg') }}" alt="city">
                    <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">Yaoundé</p>
                </article>
                <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/bafoussam.jpg') }}" alt="city">
                    <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">Bafoussam</p>
                </article>
            </div>
        </section>
    </main>
    <footer class="bg-gray-50 w-full mt-8">
        <div class="max-w-6xl mx-auto px-4 py-4 bg-first">
            <div class="text-white text-center">
                <p>&copy; Copyright Wintakam 2021</p>
                <p>Designed by <span class="text-green-400">Gauss Design</span> & Developed by <a href="https://www.linkedin.com/in/sam-foulla" class="text-green-400">Samankassou</a></p>
            </div>
        </div>
    </footer>

@endsection
