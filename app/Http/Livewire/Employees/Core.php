<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class Core extends Component
{
    public $employee;
    public $subview;
    public $parents;

    public function mount($employee,$subview,$parents){
        if(!$parents[0]->employees->contains($employee)){
            abort(404);
        }
    }
    public function render()
    {
        return view('livewire.employees.core');
    }
}
