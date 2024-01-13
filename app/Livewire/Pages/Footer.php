<?php

namespace App\Livewire\Pages;

use App\Models\galerie;
use App\Models\section;
use Livewire\Component;

class Footer extends Component
{
    public $galerie;
    public $sections;
    public function render()
    {
        $this->sections=section::all();
        $this->galerie=galerie::all();
        return view('livewire.pages.footer');
    }
}
