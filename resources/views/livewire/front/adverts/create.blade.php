<div>
    <main class="w-full">
        <div class="max-w-6xl px-4 mx-auto mt-24 md:mt-48">
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2 md:gap-8">
                <x-select label="Catégorie" placeholder="Selectionnez une catégorie"
                    wire:model.defer="category" >
                    @foreach ($categories as $category)
                        <x-select.option label="{{ $category->name }}" value="{{ $category->id }}" />
                    @endforeach
                </x-select>
                <x-select label="Type d'annonce" placeholder="Selectionnez un type"
                    wire:model.defer="type" searchable="false" >
                    <x-select.option label="Location" value="1" />
                    <x-select.option label="Vente" value="2" />
                </x-select>
                <x-select label="Ville" placeholder="Selectionnez la ville"
                    wire:model.defer="city" >
                    @foreach ($cities as $city)
                    <x-select.option label="{{ $city->name }}" value="{{ $city->id }}" />
                    @endforeach
                </x-select>
                <x-select label="Quartier" placeholder="Selectionnez le quartier"
                    wire:model.defer="type" searchable="false" >
                    @foreach ($neighborhoods as $neighborhood)
                    <x-select.option label="{{ $neighborhood->name }}" value="{{ $neighborhood->id }}" />
                    @endforeach
                </x-select>
                <x-input label="Prix par mois" placeholder="Prix" />
                <x-input label="Prix par an" placeholder="Prix" />
                <x-input label="Prix de vente" placeholder="Prix" />
                <x-textarea label="Description" placeholder="faites une description de votre logement" wire:wire:model.defer="description" />
            </div>
        </div>
    </main>
</div>
