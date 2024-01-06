<?php

namespace App\Livewire\Component;

use App\Models\apropos;
use Livewire\Component;

class About extends Component
{
    public $apropos ;
    public function render()
    {
        $this->apropos=apropos::all();
        return view('livewire.component.about');
    }
}
