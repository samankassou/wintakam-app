<article x-data="{ dropdownOpen: false }"
    class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md md:max-w-lg c-card md:flex hover:shadow-xl md:rounded-none">
    <div class="relative pb-48 overflow-hidden md:pr-48">
        <img class="absolute inset-0 object-cover w-full h-full" src="{{ $advert->getFirstMediaUrl('images') }}"
            alt="house" loading="lazy">
    </div>
    <div class="relative w-full p-4 pb-16">
        <h2 class="relative flex items-center justify-between pr-6 my-2 font-bold md:text-xl">
            {{ optional($advert->category)->name }}
            @if(request()->routeIs('adverts.me'))
            <span @click="dropdownOpen = !dropdownOpen">
                <x-icon name="dots-vertical" class="absolute w-5 h-5 text-gray-700 cursor-pointer right-1 top-1 hover:bg-gray-400" />
            </span>
            @else
            @if ($isBookmarked)
            <x-icon wire:click='toggleBookmark' name="bookmark"
                class="absolute w-5 h-5 text-gray-700 cursor-pointer fill-current right-1 top-1" />
            @else
            <x-icon wire:click='toggleBookmark' name="bookmark"
                class="absolute w-5 h-5 text-gray-700 cursor-pointer right-1 top-1" />
            @endif
            @endif
        </h2>
        <div x-show="dropdownOpen" x-cloak x-transition @click.away="dropdownOpen = false" class="absolute z-20 w-48 py-2 mt-1 bg-white rounded-md shadow-md right-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize hover:bg-green-500 hover:text-white">
                Modifier
            </a>
            <a wire:click.prevent="$emit('openModal', 'front.adverts.delete-advert', {{ json_encode(["advert" => $advert->id]) }})" href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize hover:bg-green-500 hover:text-white">
                Supprimer
            </a>
        </div>
        <div class="flex items-center mb-2">

            @php
            $rating = $advert->ratingsAvg();
            @endphp
            @for ($i = 0; $i < 5; $i++)
            @if ($rating - $i>= 1)
                <x-icon name="star" class="w-4 h-4 text-yellow-400 fill-current" />
            @else
            <x-icon name="star" class="w-4 h-4 text-yellow-400" />
            @endif
            @endfor
                <span class="text-sm text-gray-500"> ({{ $advert->getReviewsCount() }} avis)</span>

        </div>
        <p class="mt-3 text-xs text-gray-700">
            {{ $advert->getShortDescription().'...' }}
        </p>
        <p class="mt-2 mb-3 text-xl font-bold">
            {{ $advert->price }} <span class="text-sm font-semibold">FCFA/mois</span>
        </p>
        <div class="py-2 text-xs text-gray-700 border-t border-b">
            <p class="flex items-center gap-1 mb-2">
                <x-icon name="calendar" class="w-4 h-4" />
                <span>Publi??e {{ $advert->created_at->diffForHumans() }}</span>
            </p>
            <p class="flex items-center gap-1 mb-2">
                <x-icon name="location-marker" class="w-4 h-4" />
                <span>{{ optional($advert->neighborhood)->name }}, {{ optional($advert->neighborhood)->city->name }}</span>
            </p>
            <p class="flex items-center gap-1 mb-2">
                <x-icon name="shield-check" class="w-4 h-4" />
                <span>{{ $advert->is_verified ? 'v??rifi??' : 'non v??rifi??' }}</span>
            </p>
        </div>
        <a href="{{ route('adverts.show', ['id' => $advert->getCryptedId()]) }}"
            class="absolute w-2/3 py-2 mx-auto text-sm text-center transition-colors transform -translate-x-1/2 cursor-pointer bg-first text-gray-50 hover:bg-green-500 bottom-2 left-1/2 md:right-4">
            Plus de d??tails
        </a>
    </div>
</article>
