<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\evenements;


class Evenement extends Component
{
    public $even;
    public function render()
    {
        $this->even=evenements::all();
        return view('livewire.pages.evenement');
    }
}
