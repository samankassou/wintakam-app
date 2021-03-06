@section('title', 'Sign in to your account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <img class="h-20 mx-auto" src="{{ asset('front_office/images/logo-xl.png') }}" alt="Wintakam logo">
        </a>

        <h2 class="mt-0 text-3xl font-extrabold text-center text-gray-300 leading-9">
            Connectez-vous
        </h2>
        @if (Route::has('register'))
            <p class="mt-2 text-sm text-center text-gray-400 leading-5 max-w">
                Ou
                <a href="{{ route('register') }}" class="font-medium text-green-300 hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    Créer un nouveau compte
                </a>
            </p>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Addresse e-mail
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-400 focus:border-green-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Mot de passe
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-green-400 focus:border-green-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-green-500 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Se souvenir
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium text-first hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Mot de passe oublié?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-first border border-transparent hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring-green active:bg-green-700 transition duration-150 ease-in-out">
                            Se connecter
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
