
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
                <livewire:front.adverts.search-bar />
            </div>
        </div>
    </header>
    <main class="w-full bg-gray-50">
        <section class="max-w-6xl px-4 py-4 mx-auto">
            <h2 class="max-w-sm mb-2 text-sm font-bold text-green-500">
                Dernières annonces</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-3 justify-items-center">
                @forelse ($adverts as $advert)
                <livewire:front.adverts.card :advert='$advert' :wire:key='$advert->id' />
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
            <h2 class="max-w-sm mb-2 text-sm font-bold text-green-500">
                Annonces publiées dans vos villes</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 md:gap-3 justify-items-center">
                @foreach ($cities as $city)
                    <livewire:front.cities.card :city="$city" :wire:key="$city->id" />
                @endforeach
            </div>
        </section>
    </main>
</div>
