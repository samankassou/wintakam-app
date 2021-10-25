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
                                <a href="" class="py-4 px-2 text-green-400 border-b-4 border-green-500 font-semibold ">Accueil</a>
                                <a href="" class="py-4 px-2 text-gray-100 font-semibold border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">S'inscrire</a>
                                <a href="" class="py-4 px-2 text-gray-100 font-semibold border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Se connecter</a>
                                <a href="" class="py-4 px-2 text-gray-100 font-semibold border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300">Aide</a>
                            </div>

                            <a href="" class="py-2 px-2 font-medium text-white bg-green-500 hover:bg-green-300 transition duration-300">Publier une annonce</a>
                        </div>

                        {{-- Just to put the logo center in small device --}}
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
                        <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-first font-semibold">Home</a></li>
                        <li><a href="#services" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Services</a></li>
                        <li><a href="#about" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">About</a></li>
                        <li><a href="#contact" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Contact Us</a></li>
                    </ul>
                </div>
		    </nav>

            <header id="up" class="bg-center bg-fixed bg-no-repeat bg-cover h-screen relative">
            <!-- Overlay Background + Center Control -->
            <div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
                <div class="mx-2 text-center">
                    <h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl">
                        Sur <span class="text-green-500">Wintakam</span>,
                    </h1>
                <h2 class="text-gray-200 font-extrabold text-3xl xs:text-4xl md:text-5xl leading-tight">
                    trouvez assez <span class="text-white">facilement</span> un logement
                </h2>
                <div class="inline-flex mt-3 relative">
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

@endsection
