<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Articles;


class Arti extends Component
{
    public $articles;
    public function render()
    {
        $this->articles=Articles::all();
        return view('livewire.component.arti');
    }
}
