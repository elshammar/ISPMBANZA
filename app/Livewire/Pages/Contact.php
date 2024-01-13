<?php

namespace App\Livewire\Pages;

use App\Models\contact as contacts;
use Livewire\Component;

class Contact extends Component
{
    public $contacts;

    public function render()
    {
        $this->contacts=contacts::all();   
        return view('livewire.pages.contact');
    }
}
