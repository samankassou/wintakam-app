<?php

namespace App\Http\Livewire\Front\Adverts;

use App\Models\Advert;
use Livewire\Component;

class Index extends Component
{
    public $advertsCount = 10;

    public function render()
    {
        $latestAds = Advert::latest()
        ->when(request('city'), function ($query) {
            $query->whereHas('neighborhood.city', function ($query) {
                $query->where('name', 'LIKE', '%'.request('city').'%');
            });
        })->paginate($this->advertsCount);

        return view('livewire.front.adverts.index', [
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
