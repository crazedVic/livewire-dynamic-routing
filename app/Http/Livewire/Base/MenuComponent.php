<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;

class MenuComponent extends Component
{
    public $view;
    public $render;

    public function getUrl($suffix=""){

        if($this->view == ""){
            error_log("A");
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments()));
            return "/" .implode("/", $segments) .  ($suffix!="" ? "/" . $suffix: "");
        }
        elseif($suffix == ""){
            error_log("B");
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments())-1);
            return "/" .implode("/", $segments);
        }
        else{
            error_log("C");
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments()) -1);
            return "/" .implode("/", $segments) .  "/" . $suffix ;
        }
     }

     public function isActive($label){
         $return =  "style=\"". ($this->view == $label ? "text-decoration:underline" : "text-decoration:none") . "\"";
         error_log($return);
         return $return;
     }

    public function render()
    {
        return view($this->render);
    }
}
