<?php

namespace App\Http\Livewire\Notes;

use Livewire\Component;

class Index extends Component
{

    public $owner;

    public function render()
    {
        return view('livewire.notes.index');
    }
}
