<?php

namespace App\Http\Livewire\Front\Adverts;

use Livewire\Component;

class BookmarkCount extends Component
{
    protected $listeners = [
        'bookmarksUpdated' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.front.adverts.bookmark-count', [
            'count' => auth()->user()->bookmarks()->count()
        ]);
    }
}
