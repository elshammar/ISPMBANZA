<?php

namespace App\Livewire\Pages;

use App\Models\galerie;
use Livewire\Component;

class Footer extends Component
{
    public $galerie;
    public function render()
    {
        $this->galerie=galerie::all();
        return view('livewire.pages.footer');
    }
}
