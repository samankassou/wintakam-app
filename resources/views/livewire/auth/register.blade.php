@section('title', 'Create a new account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <img class="h-20 mx-auto" src="{{ asset('front_office/images/logo-xl.png') }}" alt="Wintakam logo">
        </a>

        <h2 class="mt-0 text-3xl font-extrabold leading-9 text-center text-gray-100 md:text-gray-900">
            Inscrivez-vous
        </h2>

        <p class="mt-2 text-sm leading-5 text-center text-gray-600 max-w">
            Ou
            <a href="{{ route('login') }}" class="font-medium text-green-300 transition duration-150 ease-in-out hover:text-green-500 focus:outline-none focus:underline">
                Connectez vous à votre compte
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:px-10">
            <form wire:submit.prevent="register">
                <div>
                    <div>
                        <div class="relative flex flex-col items-center mb-4">
                            <div class="relative w-20 h-20 overflow-hidden rounded-full">
                                @if ($picture)
                                <img class="absolute inset-0 object-cover object-center w-full h-full" src="{{ $picture->temporaryUrl() }}"
                                    alt="Avatar Upload" />
                                @else
                                <img class="absolute inset-0 object-cover object-center w-full h-full"
                                    src="{{ asset('front_office/images/avatar-placeholder.png') }}" alt="Avatar Upload" />
                                @endif
                            </div>
                            @if ($picture)
                            <div class="absolute w-20 h-20 transform -translate-x-1/2 -translate-y-1/2 rounded-full top-1/2 left-1/2">
                                <svg wire:click="deletePicture" xmlns="http://www.w3.org/2000/svg"
                                    class="absolute bottom-0 right-0 w-8 h-8 p-2 text-gray-100 transition-colors bg-green-500 rounded-full cursor-pointer hover:text-red-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                            @endif

                        </div>
                        <div class="my-2 text-center">
                            @if (!$picture)
                            <label class="mt-6 cursor-pointer">
                                <span wire:loading.attr="disabled" wire:target="picture"
                                    class="px-4 py-2 mx-auto mt-2 text-sm leading-normal text-white bg-green-500 hover:bg-green-300 disabled:opacity-50">Choisir
                                    une photo de profil</span>
                                <input type='file' class="hidden" name="picture" wire:model="picture" />
                            </label>
                            @endif
                        </div>
                        @error('picture')
                        <p class="mt-2 text-sm text-center text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                        Nom
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="name" id="name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                         Addresse e-mail
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        Mot de passe
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-400 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                        Confirmez le mot de passe
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" required class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-green-500 focus:border-green-400 sm:text-sm sm:leading-5" />
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent bg-first hover:bg-green-500 focus:outline-none focus:border-green-500 focus:ring-indigo active:bg-green-500">
                            S'inscrire
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
