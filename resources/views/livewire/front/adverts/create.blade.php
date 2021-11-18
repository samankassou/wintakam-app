<div>
    <main class="w-full">
        <div class="max-w-6xl px-4 mx-auto mt-24 md:mt-48">
            <h2 class="py-5 text-2xl font-bold text-center text-green-500 sm:py-6 md:py-7 lg:py-8 xs:text-3xl md:text-4xl">
                Publier une annonce</h2>
            <form wire:submit.prevent="saveAdvert">
                <div class="grid grid-cols-1 gap-3 md:grid-cols-2 md:gap-8">


                    <div class="mt-1 rounded-md shadow-sm">
                        <label for="type" class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                            Type d'annonce
                        </label>
                        <select name="type" wire:model.lazy="type" id="type" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out
                                                 sm:text-sm sm:leading-5
                                                  @error('type') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300
                                                   focus:ring-red @enderror">
                            <option value="">Choisir le type de votre annonce</option>
                            <option value="1">Location</option>
                            <option value="2">Vente</option>
                        </select>

                        @error('type')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-1 rounded-md shadow-sm">
                        <label for="category" class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                            Catégorie
                        </label>
                        <select name="category" wire:model.lazy="category" id="category" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out
                                                 sm:text-sm sm:leading-5
                                                  @error('category') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300
                                                   focus:ring-red @enderror">
                            <option value="">Choisir une catégorie</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @error('category')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-1 rounded-md shadow-sm">
                        <label for="city" class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                            Ville
                        </label>
                        <select name="city" wire:model="city" id="city" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out
                                                                     sm:text-sm sm:leading-5
                                                                      @error('city') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300
                                                                       focus:ring-red @enderror">
                            <option value="">Choisir une ville</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                        @error('category')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    @if ($city)
                        <div class="mt-1 rounded-md shadow-sm">
                            <label for="neighborhood" class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                                Quartier
                            </label>
                            <select wire:model="neighborhood" id="neighborhood" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out
                                                                                                                 sm:text-sm sm:leading-5
                                                                                                                  @error('neighborhood') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300
                                                                                                                   focus:ring-red @enderror">
                                <option value="">Choisir un quartier</option>
                                @foreach ($neighborhoods as $neighborhood)
                                <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
                                @endforeach
                            </select>

                            @error('category')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    @endif

                    <div class="mt-1 rounded-md shadow-sm">
                        <label for="description" class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                            Description
                        </label>

                        <textarea wire:model.lazy="description" id="description" cols="30" rows="6" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out
                             sm:text-sm sm:leading-5
                              @error('description') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300
                               focus:ring-red @enderror" placeholder="Décrivez votre logement ici"></textarea>

                        @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-1 rounded-md shadow-sm">
                        <label for="price" class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                            Prix/mois, Prix/an, Prix de vente
                        </label>
                        <input wire:model.lazy="price" type="number" id="price" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out
                                                                                                 sm:text-sm sm:leading-5
                                                                                                  @error('price') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300
                                                                                                   focus:ring-red @enderror"
                            placeholder="Montant en FCFA" />
                        @error('price')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <x-forms.filepond wire:model="images"
                        multiple allowImagePreview
                        imagePreviewMaxHeight="200" acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']" />

                    @error('images')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-center">
                    <button class="px-2 py-2 font-medium text-white transition duration-300 bg-green-500 hover:bg-green-300">Publier
                        l'annonce</button>
                </div>
            </form>
        </div>
    </main>
</div>
