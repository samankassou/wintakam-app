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

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @stack('styles')
    </head>

    <body>
        @yield('body')

        @livewireScripts
        <script src="{{ asset('vendor/izitoast/js/iziToast.min.js') }}"></script>
        <script>
            Livewire.on('success', (title, message) => {
                    iziToast.success({
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
        @stack('scripts')
    </body>
</html>
