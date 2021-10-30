<?php

namespace App\Http\Livewire\Front_office;

use App\Models\Advert;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $latestAds = Advert::latest()->paginate(10);

        return view('livewire.front_office.home', [
            'adverts' => $latestAds
        ])
        ->extends('layouts.app')
        ->section('content');
    }
}
