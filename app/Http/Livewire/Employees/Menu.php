<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class Menu extends Component
{
    public $owner;
    public $view;

    public function render()
    {
        return view('livewire.employees.menu');
    }

    public function getUrl($suffix=""){

        if($this->view == ""){
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments()));
            return "/" .implode("/", $segments) .  ($suffix!="" ? "/" . $suffix: "");
        }
        elseif($suffix == ""){
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments())-1);
            return "/" .implode("/", $segments);
        }
        else{
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments()) -1);
            return "/" .implode("/", $segments) .  "/" . $suffix ;
        }

     }
}
