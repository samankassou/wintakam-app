@push('styles')
<style>

/* Hide the images by default */
.mySlides {
display: none;
}

/* Next & previous buttons */
.prev, .next {
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
}

/* Position the "next button" to the right */
.next {
border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
background-color: rgba(0,0,0,0.8);
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}
</style>
@endpush
<div>
    <main class="w-full">
        <div class="max-w-6xl mx-auto px-4 mt-24 md:mt-48">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-8">
                <div>
                    <!-- Slideshow container -->
                    <div class="relative">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade relative pb-64 md:pb-96 overflow-hidden">
                            <div class="numbertext">1/3</div>
                            <img class="absolute inset-0 h-full w-full object-cover"
                                src="{{ asset('front_office/images/house-1.jpg') }}">
                        </div>

                        <div class="mySlides fade relative pb-64 md:pb-96 overflow-hidden">
                            <div class="numbertext">2/3</div>
                            <img class="absolute inset-0 h-full w-full object-cover"
                                src="{{ asset('front_office/images/house-2.jpg') }}">
                        </div>

                        <div class="mySlides fade relative pb-64 md:pb-96 overflow-hidden">
                            <div class="numbertext">3/3</div>
                            <img class="absolute inset-0 h-full w-full object-cover"
                                src="{{ asset('front_office/images/house-3.jpeg') }}">
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev cursor-pointer absolute top-1/2 w-auto p-4 text-gray-50 -mt-6 font-bold text-base"
                            onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next cursor-pointer absolute top-1/2 w-auto p-4 text-gray-50 -mt-6 font-bold text-base right-0"
                            onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <!-- The dots/circles -->
                    <div class="mt-3 text-center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-center">
                        <h2 class="relative font-bold md:text-xl my-2 flex justify-between items-center pr-6">
                            {{ $advert->category->name }}
                        </h2>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center justify-between">

                                @php
                                $rating = $advert->ratingsAvg();
                                @endphp
                                @for ($i = 0; $i < 5; $i++) @if ($rating - $i>= 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400 fill-current" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                    @endif
                                    @endfor
                                    <span class="text-sm text-gray-500"> ({{ $advert->getReviewsCount() }} avis)</span>

                            </div>
                        </div>
                        <a href="#" class="flex items-center underline text-gray-700 hover:text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-4 w-4 underline" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                            <span class="hidden md:inline-flex"> Enregistrer</span>
                        </a>
                    </div>
                    <div class="mt-4">
                        <h3 class="font-bold text-lg text-gray-700">
                            Adresse
                        </h3>
                        <p class="flex items-center text-gray-700 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>{{ $advert->neighborhood->name }}, {{ $advert->neighborhood->city->name }}</span>
                        </p>
                    </div>
                    <div class="mt-4">
                        <h3 class="font-bold text-lg text-gray-700">Description</h3>
                        <p class="text-gray-700 text-sm">
                            {{ $advert->description }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <h3 class="font-bold text-lg text-gray-700">Prix</h3>
                        <p class="mt-2 font-bold text-xl mb-3">
                            {{ $advert->price_per_month }} <span class="text-sm font-semibold">FCFA/mois</span>
                        </p>
                    </div>
                    <div class="mt-4">
                        <h3 class="font-bold text-lg text-gray-700">Publiée</h3>
                        <p>
                            {{ $advert->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@push('scripts')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex=slides.length} for (i=0; i < slides.length; i++) { slides[i].style.display="none" ; } for (i=0; i
            < dots.length; i++) { dots[i].className=dots[i].className.replace(" active", "" ); }
            slides[slideIndex-1].style.display="block" ; dots[slideIndex-1].className +=" active" ; }
    </script>
@endpush
