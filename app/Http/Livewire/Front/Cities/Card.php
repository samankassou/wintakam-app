<?php

namespace App\Http\Livewire\Front\Cities;

use App\Models\City;
use Livewire\Component;

class Card extends Component
{
    public City $city;

    public function render()
    {
        return view('livewire.front.cities.card');
    }
}
