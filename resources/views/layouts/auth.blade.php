@extends('layouts.base')
@push('styles')
    <link rel="stylesheet" href="{{ asset('front_office/css/home.css') }}">
    <style>
        .c {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./front_office/images/home/bg-sm.jpg');
        }
        @media screen and (min-width: 768px){
            .c{
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./front_office/images/home/bg-md.jpg');
            }
        }
        @media screen and (min-width: 992px){
            .c{
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./front_office/images/home/bg-xl.jpg');
            }
        }

    </style>
@endpush
@section('body')
    <div class="c flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8 bg-opacity-50">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
