<?php

namespace App\Http\Livewire\Front\Adverts;

use App\Models\Advert;
use Livewire\Component;

class Show extends Component
{
    public Advert $advert;

    public function render()
    {
        return view('livewire.front.advert.show')
        ->extends('layouts.front')
        ->section('main');
    }
}
