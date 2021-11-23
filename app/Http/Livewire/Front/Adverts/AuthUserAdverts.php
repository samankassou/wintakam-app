<?php

namespace App\Http\Livewire\Front\Adverts;

use App\Models\Advert;
use Livewire\Component;

class AuthUserAdverts extends Component
{

    public $advertsCount = 10;

     protected $listeners = ['advertDeleted' => '$refresh'];

    public function render()
    {
        $latestAds = Advert::authUserAdverts()
        ->when(request('city'), function ($query) {
            $query->whereHas('neighborhood.city', function ($query) {
                $query->where('name', 'LIKE', '%'.request('city').'%');
            });
        })->paginate($this->advertsCount);

        return view('livewire.front.adverts.auth-user-adverts', [
            'adverts' => $latestAds
        ])
        ->extends('layouts.front')
        ->section('main');
    }

    public function loadMore()
    {
        $this->advertsCount += 5;
    }
}
