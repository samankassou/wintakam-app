<?php

namespace App\Http\Livewire\Front\Adverts;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.front.adverts.index')
        ->extends('layouts.front')
        ->section('main');
    }
}
