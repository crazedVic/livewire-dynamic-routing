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

    public function getUrl($id){
        $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments())-1);
        return "/" .implode("/", $segments) . "/employee/" . $id;
     }
}
