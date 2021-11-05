<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Livewire\Front\Home::class)->name('home');
Route::get('/adverts/{advert}', \App\Http\Livewire\Front\Adverts\Show::class)->name('adverts.show');
Route::get('/adverts', \App\Http\Livewire\Front\Adverts\Index::class)->name('adverts.index');

require __DIR__.'/auth.php';
