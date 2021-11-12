<?php

namespace App\Http\Livewire\Front\Adverts;

use App\Models\Category;
use App\Models\City;
use App\Models\Neighborhood;
use Livewire\Component;

class Create extends Component
{
    public $category;
    public $description;
    public $type;
    public $city;

    public function mount()
    {
        $this->city = City::first()->id;
    }

    public function render()
    {
        return view('livewire.front.adverts.create', [
            'categories' => Category::all(['id', 'name']),
            'cities' => City::all(['id', 'name']),
            'neighborhoods' => Neighborhood::where('city_id', $this->city)->get(['id', 'name'])
        ])
        ->extends('layouts.front')
        ->section('main');
    }
}
