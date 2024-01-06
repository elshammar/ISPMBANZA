<?php

namespace App\Livewire\Component;

use App\Models\section;
use Livewire\Component;

class Depart extends Component
{
    public $sections;
    public function render()
    {
        $this->sections=section::all();
        return view('livewire.component.depart');
    }
}
