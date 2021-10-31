<?php

namespace App\Http\Livewire\Front;

use App\Models\Advert;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $this->emit("success", __("Success:"), __("Courier updated!"));
        $latestAds = Advert::latest()->paginate(10);

        return view('livewire.front.home', [
            'adverts' => $latestAds
        ])
        ->extends('layouts.app')
        ->section('content');
    }
}
