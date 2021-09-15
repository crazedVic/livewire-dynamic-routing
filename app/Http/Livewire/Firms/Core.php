<?php

namespace App\Http\Livewire\Firms;

use Livewire\Component;

class Core extends Component
{

    public $firm;
    public $subview;

    public function render()
    {
        return view('livewire.firms.core');
    }
}
