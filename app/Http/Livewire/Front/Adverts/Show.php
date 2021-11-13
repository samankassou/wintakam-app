<?php

namespace App\Http\Livewire\Front\Adverts;

use App\Models\Advert;
use Livewire\Component;

class Show extends Component
{
    public $advert;

    public function mount($id)
    {
        $this->advert = Advert::find($id);
    }

    public function render()
    {
        return view('livewire.front.adverts.show')
        ->extends('layouts.front')
        ->section('main');
    }
}
