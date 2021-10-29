@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('front_office/css/home.css') }}">
@endpush

@section('content')
@include('front_office.partials.__navbar')
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500 p-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
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
        <h2 class="py-5 sm:py-6 md:py-7 lg:py-8 text-center font-bold text-2xl xs:text-3xl md:text-4xl text-green-500">
            Dernières annonces</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-3 justify-items-center">
            @forelse ($adverts as $advert)
                <article
                    class="max-w-sm md:max-w-none c-card md:flex bg-white shadow-md hover:shadow-xl rounded-lg md:rounded-none overflow-hidden">
                    <div class="relative pb-48 md:pr-48 overflow-hidden">
                        @if (config('app.env') == 'local')
                            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('front_office/images/house-2.jpg') }}" alt="house">
                        @endif
                        @production
                            <img class="absolute inset-0 h-full w-full object-cover" src="https://source.unsplash.com/800x600/?house" alt="house">
                        @endproduction
                    </div>
                    <div class="p-4 relative pb-20">
                        <h2 class="relative font-bold md:text-xl my-2 flex justify-between items-center pr-6">
                            {{ $advert->title }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute cursor-pointer right-1 top-1h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </h2>
                        <div class="flex mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs mt-3">
                            {{ substr($advert->description, 40).'..' }}
                        </p>
                        <p class="mt-2 font-bold text-xl mb-3">
                            {{ $advert->price_per_month }} <span class="text-sm font-semibold">FCFA/mois</span>
                        </p>
                        <div class="py-4 border-t border-b text-xs text-gray-700">
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Publiée {{ $advert->created_at->diffForHumans() }}</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>{{ $advert->neighborhood->name }}, {{ $advert->neighborhood->city->name }}</span>
                            </p>
                            <p class="flex items-center gap-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>{{ $advert->is_verified ? 'vérifié' : 'non vérifié' }}</span>
                            </p>
                        </div>
                        <div class="absolute bottom-2 right-4 w-2/3 mx-auto bg-first text-gray-50 text-center text-sm py-2 hover:bg-green-500 transition-colors cursor-pointer">
                            Plus de détails
                        </div>
                    </div>
                </article>
            @empty
                <p class="text-center text-gray-700 text-xl">Aucune annonce publiée</p>
            @endforelse
        </div>
        <a href="#"
            class="block shadow-md mt-3 sm:mt-5 md:mt-8 w-40 mx-auto text-sm text-center hover:text-green-500 border-green-500 border hover:bg-gray-50 transition-colors text-gray-50 bg-green-500 py-2 px-3 font-semibold">Voir
            Plus...</a>
    </section>
    <section class="max-w-6xl mx-auto px-4 mt-5">
        <h2 class="py-5 sm:py-6 md:py-7 lg:py-8 text-center font-bold text-2xl xs:text-3xl md:text-4xl text-green-500">
            Annonces publiées dans vos villes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-3 justify-items-center">
            <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover"
                    src="{{ asset('front_office/images/buea.jpg') }}" alt="city">
                <p
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">
                    Buéa</p>
            </article>
            <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover"
                    src="{{ asset('front_office/images/Douala.jpg') }}" alt="city">
                <p
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">
                    Douala</p>
            </article>
            <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover"
                    src="{{ asset('front_office/images/maroua.jpg') }}" alt="city">
                <p
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">
                    Maroua</p>
            </article>
            <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover"
                    src="{{ asset('front_office/images/Gra.jpg') }}" alt="city">
                <p
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">
                    Garoua</p>
            </article>
            <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover"
                    src="{{ asset('front_office/images/yaounde.jpg') }}" alt="city">
                <p
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">
                    Yaoundé</p>
            </article>
            <article class="c-card relative w-full h-60 max-w-sm shadow-md hover:shadow-lg overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover"
                    src="{{ asset('front_office/images/bafoussam.jpg') }}" alt="city">
                <p
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-50 font-semibold bg-gray-800 p-2 rounded bg-opacity-30">
                    Bafoussam</p>
            </article>
        </div>
    </section>
</main>
@include('front_office.partials.__footer')
@endsection
