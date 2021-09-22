<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class Core extends Component
{
    public $employee;
    public $subview;
    public $parents;

    public function render()
    {
        return view('livewire.employees.core');
    }
}
