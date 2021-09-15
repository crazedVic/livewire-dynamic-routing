<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class Read extends Component
{

    public $employee;

    public function render()
    {
        return view('livewire.employees.read');
    }
}
