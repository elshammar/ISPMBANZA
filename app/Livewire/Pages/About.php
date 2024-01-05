<?php

namespace App\Livewire\Pages;

use App\Models\apropos;
use Livewire\Component;

class About extends Component
{
    
    public $apropos ;
    public $image;

    public function render()
    {
        $this->apropos=apropos::all();
        $this->image=apropos::find(1);
        return view('livewire.pages.about');
    }
}
