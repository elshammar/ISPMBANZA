<?php

namespace App\Livewire\Pages;

use App\Models\contact;
use App\Models\galerie;
use App\Models\section;
use Livewire\Component;

class Footer extends Component
{
    public $galerie;
    public $sections;
    public $contacts;
    public function render()
    {
        $this->contacts=contact::all();
        $this->sections=section::all();
        $this->galerie=galerie::all();
        return view('livewire.pages.footer');
    }
}
