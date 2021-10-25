@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('front_office/css/home.css') }}">
@endpush

@section('content')
    		<nav class="bg-first shadow-md" x-data="{showMenu: false}">
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
                                <a href="" class="py-4 px-2 text-white border-b-4 border-white font-semibold ">Home</a>
                                <a href="" class="py-4 px-2 text-gray-100 font-semibold hover:text-white transition duration-300">Services</a>
                                <a href="" class="py-4 px-2 text-gray-100 font-semibold hover:text-white transition duration-300">About</a>
                                <a href="" class="py-4 px-2 text-gray-100 font-semibold hover:text-white transition duration-300">Contact Us</a>
                            </div>

                            <a href="" class="py-2 px-2 font-medium text-gray-100 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
                            <a href="" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-500 transition duration-300">Sign Up</a>
                        </div>

                        {{-- Just to put the logo center in small device --}}
                        <div class="md:hidden"></div>

                    </div>
                </div>
                <!-- mobile menu -->
                <div class="hidden mobile-menu">
                    <ul class="">
                        <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-first font-semibold">Home</a></li>
                        <li><a href="#services" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Services</a></li>
                        <li><a href="#about" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">About</a></li>
                        <li><a href="#contact" class="block text-sm px-2 py-4 text-white hover:bg-green-500 transition duration-300">Contact Us</a></li>
                    </ul>
                </div>
		    </nav>

@endsection
