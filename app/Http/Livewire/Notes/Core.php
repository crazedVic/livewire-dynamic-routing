<?php

namespace App\Http\Livewire\Notes;

use Livewire\Component;

class Core extends Component
{

    public $note;
    public $subview;
    public $parents;

    public function render()
    {
        return view('livewire.notes.core');
    }
}
