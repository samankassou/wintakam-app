<?php

namespace App\Http\Livewire\Front\Adverts;

use Livewire\Component;

class Card extends Component
{
    public $advert;
    public $isBookmarked;

    public function mount($advert)
    {
        $this->advert = $advert;
    }

    public function render()
    {
        $this->isBookmarked = auth()->user()->bookmarks->contains('id', $this->advert->id);
        return view('livewire.front.adverts.card');
    }

    public function toggleBookmark()
    {
        auth()->user()->bookmarks()->toggle($this->advert->id);
        $this->emit('bookmarksUpdated');
        $this->emit("success", __("Success:"), __("Annonces favorites modifiées"));
    }
}
