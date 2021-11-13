<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Livewire\Front\Home::class)->name('home');
Route::get('/adverts/new', \App\Http\Livewire\Front\Adverts\Create::class)
->name('adverts.create')
->middleware(['auth']);
Route::get('/adverts/{id}', \App\Http\Livewire\Front\Adverts\Show::class)->name('adverts.show');
Route::get('/adverts', \App\Http\Livewire\Front\Adverts\Index::class)
->name('adverts.index');

require __DIR__.'/auth.php';
