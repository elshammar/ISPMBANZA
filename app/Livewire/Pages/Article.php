<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Articles;

class Article extends Component
{
    public $articles;
    public $x=12;
    public function render()
    {
        $this->articles=Articles::all();
        return view('livewire.pages.article');
    }
}
