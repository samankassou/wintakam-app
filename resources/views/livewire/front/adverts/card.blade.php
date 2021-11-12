<article
    class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md md:max-w-lg c-card md:flex hover:shadow-xl md:rounded-none">
    <div class="relative pb-48 overflow-hidden md:pr-48">
        @if (config('app.env') == 'local')
        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('front_office/images/house-2.jpg') }}"
            alt="house" loading="lazy">
        @endif
        @production
        <img class="absolute inset-0 object-cover w-full h-full" src="https://source.unsplash.com/800x600/?house"
            alt="house" loading="lazy">
        @endproduction
    </div>
    <div class="relative w-full p-4 pb-16">
        <h2 class="relative flex items-center justify-between pr-6 my-2 font-bold md:text-xl">
            {{ $advert->category->name }}
            <svg wire:click='toggleBookmark' xmlns="http://www.w3.org/2000/svg"
                class="absolute w-5 text-gray-700 cursor-pointer right-1 top-1h-5 @if($isBookmarked) fill-current @endif" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
            </svg>
        </h2>
        <div class="flex items-center mb-2">

            @php
            $rating = $advert->ratingsAvg();
            @endphp
            @for ($i = 0; $i < 5; $i++) @if ($rating - $i>= 1)
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400 fill-current" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                @endif
                @endfor
                <span class="text-sm text-gray-500"> ({{ $advert->getReviewsCount() }} avis)</span>

        </div>
        <p class="mt-3 text-xs text-gray-700">
            {{ $advert->getShortDescription().'...' }}
        </p>
        <p class="mt-2 mb-3 text-xl font-bold">
            {{ $advert->price_per_month }} <span class="text-sm font-semibold">FCFA/mois</span>
        </p>
        <div class="py-2 text-xs text-gray-700 border-t border-b">
            <p class="flex items-center gap-1 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>Publiée {{ $advert->created_at->diffForHumans() }}</span>
            </p>
            <p class="flex items-center gap-1 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>{{ optional($advert->neighborhood)->name }}, {{ optional($advert->neighborhood)->city->name }}</span>
            </p>
            <p class="flex items-center gap-1 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <span>{{ $advert->is_verified ? 'vérifié' : 'non vérifié' }}</span>
            </p>
        </div>
        <a href="{{ route('adverts.show', $advert) }}"
            class="absolute w-2/3 py-2 mx-auto text-sm text-center transition-colors transform -translate-x-1/2 cursor-pointer bg-first text-gray-50 hover:bg-green-500 bottom-2 left-1/2 md:right-4">
            Plus de détails
        </a>
    </div>
</article>
