<?php

namespace App\Livewire\Pages;

use App\Models\section;
use Livewire\Component;
use App\Models\departement;

class DetailSection extends Component
{
    public $details;
    public $departement;

    public function render()
    {
        return view('livewire.pages.detail-section');
    }

    public function mount($id){
        $this->details=section::find($id);
        $this->departement=departement::where('section_id','=',$id)->get();
    }

}
