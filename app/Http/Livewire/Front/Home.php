<?php

namespace App\Http\Livewire\Front;

use App\Models\Advert;
use Livewire\Component;

class Home extends Component
{
    public $advertsCount = 10;

    public function render()
    {
        $latestAds = Advert::latest()->paginate($this->advertsCount);

        return view('livewire.front.home', [
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
