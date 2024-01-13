<?php

namespace App\Livewire\Component;

use App\Models\contact;
use Livewire\Component;


class Conct extends Component
{
    public $contacts;

    public function render()
    {
        $this->contacts=contact::all();
        return view('livewire.component.conct');
    }
}
