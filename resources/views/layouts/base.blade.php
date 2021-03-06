<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        <link rel="stylesheet" href="{{ asset('vendor/izitoast/css/iziToast.min.css') }}">
        @livewireStyles
        @wireUiScripts

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @stack('styles')
    </head>

    <body>
        @yield('body')

        @livewireScripts
        <!-- scroll to top component -->
        <button id="scrollTopBtn" role="button" style="z-index: 9999; bottom: 40px; right: 20px; display: none" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"
            class="fixed p-3 bg-green-600 border border-none rounded-full shadow-xl animate-bounce hover:transform hover:scale-50 hover:shadow-2xl hover:bg-green-700">
            <x-icon name="arrow-up" class="w-6 h-6 text-white" />
        </button>
        <script src="{{ asset('vendor/izitoast/js/iziToast.min.js') }}"></script>
        <script>
            Livewire.on('success', (title, message) => {
                    iziToast.success({
                        title: title,
                        message: message,
                        position: 'topRight',
                    });
                })
            Livewire.on('error', (title, message) => {
                    iziToast.error({
                        title: title,
                        message: message,
                        position: 'topRight',
                    });
                })
            Livewire.on('info', (title, message) => {
                    iziToast.info({
                        title: title,
                        message: message,
                        position: 'topRight',
                    });
                })

        </script>
        @if (session('alert'))
        <script>
            iziToast.success({
                        title: "{{ session('alert') }}",
                        message: "{{ session('message') }}",
                        position: 'topRight',
                    })

        </script>
        @endif
        @livewire('livewire-ui-modal')
        <script>
            //Get the button:
            scrollTopBtn = document.getElementById("scrollTopBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            scrollTopBtn.style.display = "block";
            } else {
            scrollTopBtn.style.display = "none";
            }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        </script>
        @stack('scripts')
    </body>
</html>
