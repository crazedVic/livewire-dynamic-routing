<?php

namespace App\Http\Livewire\Documents;

use Livewire\Component;

class Core extends Component
{

    public $document;
    public $subview;
    public $parents;

    public function render()
    {
        return view('livewire.documents.core');
    }
}
