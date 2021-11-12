
<div>
    <header class="relative h-screen bg-fixed bg-center bg-no-repeat bg-cover">
        <!-- Overlay Background + Center Control -->
        <div class="flex items-center justify-center h-screen bg-black bg-opacity-50">
            <div class="mx-2 text-center">
                <h1 class="text-4xl font-extrabold text-gray-100 xs:text-5xl md:text-6xl">
                    Sur <span class="text-green-500">Wintakam</span>,
                </h1>
                <h2 class="text-3xl font-extrabold leading-tight text-gray-200 xs:text-4xl md:text-5xl">
                    trouvez assez <span class="text-white">facilement</span> un logement
                </h2>
                <form action="{{ route('adverts.index') }}" class="relative inline-flex mt-4 sm:w-5/6 md:w-4/6 sm:mt-6 md:mt-8">
                    <span class="absolute left-0 flex items-center justify-end w-auto top-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 p-2 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input class="w-full py-2 pl-8" name="city" type="search" placeholder="Entrez le nom d'une ville">
                    <button class="py-2 pl-4 pr-4 text-white bg-first hover:bg-green-500">
                        <p class="text-xs font-semibold md:text-sm">RECHERCHER</p>
                    </button>
                </form>
            </div>
        </div>
    </header>
    <main class="w-full bg-gray-50">
        <section class="max-w-6xl px-4 mx-auto">
            <h2 class="py-5 text-2xl font-bold text-center text-green-500 sm:py-6 md:py-7 lg:py-8 xs:text-3xl md:text-4xl">
                Dernières annonces</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-3 justify-items-center">
                @forelse ($adverts as $advert)
                @livewire('front.adverts.card', ['advert' => $advert], key($advert->id))
                @empty
                <p class="text-xl text-center text-gray-700">Aucune annonce publiée</p>
                @endforelse
            </div>
            <div class="flex items-center justify-center mt-4" wire:loading.flex wire:target="loadMore">
                <div class="w-8 h-8 border-t-2 border-b-2 border-green-500 rounded-full animate-spin">

                </div>
            </div>
            @if ($adverts->count())
                <button wire:click="loadMore"
                    class="block w-40 px-3 py-2 mx-auto mt-3 text-sm font-semibold text-center transition-colors bg-green-500 border border-green-500 shadow-md sm:mt-5 md:mt-8 hover:text-green-500 hover:bg-gray-50 text-gray-50">Voir
                    Plus...</button>
            @endif
        </section>
        <section class="max-w-6xl px-4 mx-auto mt-5">
            <h2 class="py-5 text-2xl font-bold text-center text-green-500 sm:py-6 md:py-7 lg:py-8 xs:text-3xl md:text-4xl">
                Annonces publiées dans vos villes</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 md:gap-3 justify-items-center">
                <article class="relative w-full max-w-sm overflow-hidden shadow-md c-card h-60 hover:shadow-lg">
                    <img class="absolute inset-0 object-cover w-full h-full"
                        src="{{ asset('front_office/images/buea.jpg') }}" alt="city">
                    <p
                        class="absolute p-2 font-semibold transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded top-1/2 left-1/2 text-gray-50 bg-opacity-30">
                        Buéa</p>
                </article>
                <article class="relative w-full max-w-sm overflow-hidden shadow-md c-card h-60 hover:shadow-lg">
                    <img class="absolute inset-0 object-cover w-full h-full"
                        src="{{ asset('front_office/images/Douala.jpg') }}" alt="city">
                    <p
                        class="absolute p-2 font-semibold transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded top-1/2 left-1/2 text-gray-50 bg-opacity-30">
                        Douala</p>
                </article>
                <article class="relative w-full max-w-sm overflow-hidden shadow-md c-card h-60 hover:shadow-lg">
                    <img class="absolute inset-0 object-cover w-full h-full"
                        src="{{ asset('front_office/images/maroua.jpg') }}" alt="city">
                    <p
                        class="absolute p-2 font-semibold transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded top-1/2 left-1/2 text-gray-50 bg-opacity-30">
                        Maroua</p>
                </article>
                <article class="relative w-full max-w-sm overflow-hidden shadow-md c-card h-60 hover:shadow-lg">
                    <img class="absolute inset-0 object-cover w-full h-full"
                        src="{{ asset('front_office/images/Gra.jpg') }}" alt="city">
                    <p
                        class="absolute p-2 font-semibold transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded top-1/2 left-1/2 text-gray-50 bg-opacity-30">
                        Garoua</p>
                </article>
                <article class="relative w-full max-w-sm overflow-hidden shadow-md c-card h-60 hover:shadow-lg">
                    <img class="absolute inset-0 object-cover w-full h-full"
                        src="{{ asset('front_office/images/yaounde.jpg') }}" alt="city">
                    <p
                        class="absolute p-2 font-semibold transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded top-1/2 left-1/2 text-gray-50 bg-opacity-30">
                        Yaoundé</p>
                </article>
                <article class="relative w-full max-w-sm overflow-hidden shadow-md c-card h-60 hover:shadow-lg">
                    <img class="absolute inset-0 object-cover w-full h-full"
                        src="{{ asset('front_office/images/bafoussam.jpg') }}" alt="city">
                    <p
                        class="absolute p-2 font-semibold transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded top-1/2 left-1/2 text-gray-50 bg-opacity-30">
                        Bafoussam</p>
                </article>
            </div>
        </section>
    </main>
</div>
