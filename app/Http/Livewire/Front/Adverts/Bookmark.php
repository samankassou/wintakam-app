<?php

namespace App\Http\Livewire\Front\Adverts;

use Livewire\Component;

class Bookmark extends Component
{
    public $advertId;
    public $bookmarked;


    public function mount($advertId, $bookmarked)
    {
        $this->advertId = $advertId;
        $this->bookmarked = $bookmarked;
    }

    public function render()
    {
        $filled = $this->bookmarked->contains('id', $this->advertId);
        return view('livewire.front.adverts.bookmark', compact('filled'));
    }

    public function toggleBookmark()
    {
        auth()->user()->bookmarks()->toggle($this->advertId);
        $this->emit('bookmarkUpdated');
        $this->emit("success", __("Success:"), __("Annonces favorites modifiées"));
    }
}
