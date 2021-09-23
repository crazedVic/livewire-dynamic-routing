<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class Index extends Component
{
    public $owner;

    public function render()
    {
        return view('livewire.employees.index');
    }
}
