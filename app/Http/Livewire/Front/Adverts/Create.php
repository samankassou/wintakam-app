<?php

namespace App\Http\Livewire\Front\Adverts;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.front.adverts.create')
        ->extends('layouts.front')
        ->section('main');
    }
}
