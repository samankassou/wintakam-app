<a href="{{ route('adverts.index', ['city' => $city->name]) }}" class="relative w-full max-w-sm overflow-hidden shadow-md c-card h-60 hover:shadow-lg">
    <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('front_office/images/buea.jpg') }}"
        alt="city">
    <p
        class="absolute p-2 font-semibold transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded top-1/2 left-1/2 text-gray-50 bg-opacity-30">
        {{ $city->name }} ({{ $city->adverts_count }})</p>
</a>
