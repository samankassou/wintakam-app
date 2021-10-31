@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('front_office/css/home.css') }}">
@endpush

@section('content')
@include('front_office.partials.__navbar')
@yield('main')
@include('front_office.partials.__footer')
@isset($slot)
{{ $slot }}
@endisset

@endsection

