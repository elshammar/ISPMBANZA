<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\temoignage;

class Temoignages extends Component
{
    public $temoignages;
    public $y=33;

    public function render()
    {
        $this->temoignages=temoignage::all();

        return view('livewire.pages.temoignages');
    }
}
