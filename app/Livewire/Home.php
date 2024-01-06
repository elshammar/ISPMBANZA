<?php

namespace App\Livewire;


use App\Models\section;
use Livewire\Component;
use App\Models\Articles;

class Home extends Component
{
    public $section;
    public $article;

    public function render()
    {
        $this->section=section::all();
        $this->article=Articles::all();
        return view('livewire.home');
    }
}
