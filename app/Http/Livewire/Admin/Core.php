<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Core extends Component
{
    public $firm;
    public $subview;

    public function render()
    {
        return view('livewire.admin.core');
    }
}
