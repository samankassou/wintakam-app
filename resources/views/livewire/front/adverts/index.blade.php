<div>
    <main class="w-ful bg-gray-50">
        <div class="max-w-6xl px-4 mx-auto mt-24 md:mt-48">
            <section class="max-w-6xl px-4 mx-auto">
                <h2 class="py-5 text-xl font-semibold text-center text-green-500 sm:py-6 md:py-7 lg:py-8 xs:text-3xl md:text-4xl">
                    Les annonces
                    @if (request('city'))
                        qui correspondent à "{{ request('city') }}"
                    @endif
                </h2>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-3 justify-items-center">
                    @forelse ($adverts as $advert)
                    @livewire('front.adverts.card', ['advert' => $advert], key($advert->id))
                    @empty
                    @if(request('city'))
                    <p class="text-xl text-center text-gray-700">Aucune annonce ne correspond à votre recherche</p>
                    @else
                    <p class="text-xl text-center text-gray-700">Aucune annonce publiée</p>
                    @endif

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
        </div>
    </main>
</div>
