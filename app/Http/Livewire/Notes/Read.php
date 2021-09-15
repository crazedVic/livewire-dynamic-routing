<?php

namespace App\Http\Livewire\Notes;

use Livewire\Component;

class Read extends Component
{

    public $note;

    public function render()
    {
        return view('livewire.notes.read');
    }
}
