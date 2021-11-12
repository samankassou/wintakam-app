<form action="{{ route('adverts.index') }}" class="relative inline-flex mt-4 sm:w-5/6 md:w-4/6 sm:mt-6 md:mt-8">
    <span class="absolute left-0 flex items-center justify-end w-auto top-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 p-2 text-gray-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </span>
    <input class="w-full py-2 pl-8" name="city" type="search" placeholder="Entrez le nom d'une ville">
    <button class="py-2 pl-4 pr-4 text-white bg-first hover:bg-green-500">
        <p class="text-xs font-semibold md:text-sm">RECHERCHER</p>
    </button>
</form>
