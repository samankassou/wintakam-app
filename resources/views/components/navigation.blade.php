<div class="items-center hidden space-x-1 md:flex">
    @foreach ($routes as $route)
    <a href="{{ $route['url'] }}" class="py-4 px-2 text-gray-100 border-transparent hover:text-green-400 border-b-4 hover:border-green-500 transition duration-300 @if($route['active']) text-green-400 border-green-500 font-semibold @endif">
        {{ $route['name'] }}
    </a>
    @endforeach
</div>
