<?php

namespace App\Http\Livewire\Front\Adverts;

use App\Models\City;
use App\Models\Advert;
use Livewire\Component;
use App\Models\Category;
use App\Models\Neighborhood;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class Create extends Component
{
    use WithFileUploads;

    public $category;
    public $description;
    public $type;
    public $cities;
    public $neighborhoods;
    public $categories;
    public $city = NULL;
    public $neighborhood = '';
    public $images = [];
    public $price;

    protected $rules = [
        'type'         => ['required'],
        'category'     => ['required'],
        'city'         => ['required'],
        'neighborhood' => ['required'],
        'description'  => ['required'],
        'price'        => ['required', 'integer'],
        'images'       => ['required', 'array'],
        'images.*'     => ['image', 'mimes:png,jpg,jpeg']
    ];

    public function mount()
    {
        $this->cities = City::all(['id', 'name']);
        $this->categories = Category::all(['id', 'name']);
        $this->neighborhoods = collect();
    }

    public function render()
    {
        if($this->getErrorBag()->count()){

            // send success notification
            $this->emit("error", 'Erreur', __("Vérifiez les informations!"));
        }
        return view('livewire.front.adverts.create')
        ->extends('layouts.front')
        ->section('main');
    }

    public function saveAdvert()
    {
         $data = $this->validate();
        // if there are errors, send error notification

        $advert = Advert::create([
            'type'            => $data['type'],
            'category_id'     => $data['category'],
            'neighborhood_id' => $data['neighborhood'],
            'description'     => $data['description'],
            'price'           => $data['price'],
            'host_id'         => auth()->id(),
        ]);

         // Add the files to the collection
        collect($this->images)->each(fn($image) =>
            $advert->addMedia($image->getRealPath())->toMediaCollection('images')
        );

        // compress images
        $advert->getMedia('images')->each(function($image){

            Image::make($image->getPath())
            ->fit(300, 300)
            ->save();
        });

        // send success notification
        $this->emit("success", '', __("Votre annonce est en cours de vérification"));

        // redirect to my adverts
        $this->redirectRoute('adverts.index');
    }

    public function updatedCity($city)
    {
        if(!is_null($city)){
            $this->reset('neighborhood');
            $this->neighborhoods = Neighborhood::where('city_id', $city)->get();
        }
    }
}
