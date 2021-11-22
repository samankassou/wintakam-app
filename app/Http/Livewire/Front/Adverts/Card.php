<?php

namespace App\Http\Livewire\Front\Adverts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Card extends Component
{
    public $advert;
    public $isBookmarked = false;

    public function mount($advert)
    {
        $this->advert = $advert;
    }

    public function render()
    {
        if (Auth::check()) {
            $this->isBookmarked = auth()->user()->bookmarks->contains('id', $this->advert->id);
        }
        return view('livewire.front.adverts.card');
    }

    public function toggleBookmark()
    {
        if (!Auth::check()) {
            $this->emit("info", __(""), __("Vous n'êtes pas connecté"));
            return;
        }
        auth()->user()->bookmarks()->toggle($this->advert->id);
        $this->emit('bookmarksUpdated');
        $this->emit("success", __("Succès"), __("Annonces favorites modifiées"));
    }

    public function deleteAdvert($advertId)
    {
        dd($advertId);
    }
}
