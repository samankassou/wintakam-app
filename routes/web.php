<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Livewire\Front\Home::class)->name('home');

require __DIR__.'/auth.php';
