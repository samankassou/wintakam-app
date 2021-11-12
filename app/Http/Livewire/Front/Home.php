<?php

namespace App\Http\Livewire\Front;

use App\Models\Advert;
use App\Models\City;
use Livewire\Component;

class Home extends Component
{
    public $advertsCount = 10;

    public function render()
    {
        $latestAds = Advert::latest()->paginate($this->advertsCount);
        $cities = City::all(['name']);

        return view('livewire.front.home', [
            'adverts' => $latestAds,
            'cities' => $cities
        ])
        ->extends('layouts.front')
        ->section('main');
    }

    public function loadMore()
    {
        $this->advertsCount += 5;
    }
}
