<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\evenements;

class Even extends Component
{
    public $even;
    public function render()
    {
        $this->even=evenements::all();
        return view('livewire.component.even');
    }
}
