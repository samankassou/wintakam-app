<?php

namespace App\Http\Livewire\Front\Adverts;

use App\Models\Advert;
use LivewireUI\Modal\ModalComponent;

class DeleteAdvert extends ModalComponent
{
    public $advert;

    public function mount(Advert $advert)
    {
        $this->advert = $advert;
    }

    public function render()
    {
        return view('livewire.front.adverts.delete-advert');
    }

    public function delete()
    {
        $this->advert->delete();
        $this->emit("advertDeleted");
        $this->emit("success", "", "Annonce supprimée");
        $this->closeModal();
    }

}
