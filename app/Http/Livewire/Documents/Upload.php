<?php

namespace App\Http\Livewire\Documents;

use Livewire\Component;

class Upload extends Component
{

    public $owner;

    public function render()
    {
        return view('livewire.documents.upload');
    }
}
