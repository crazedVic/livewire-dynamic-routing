<?php

namespace App\Http\Livewire\Documents;

use Livewire\Component;

class Read extends Component
{

    public $document;

    public function render()
    {
        return view('livewire.documents.read');
    }
}
