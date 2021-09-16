<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;

class MenuComponent extends Component
{
    public $view;
    public $render;

    public function getUrl($suffix=""){
        //if view is more than one segment, determine amount to chop off
        $subtract = count(explode('-', $this->view));

        if($this->view == ""){
            error_log("A");
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments()));
            return "/" .implode("/", $segments) .  ($suffix!="" ? "/" . $suffix: "");
        }
        elseif($suffix == ""){
            error_log("B");
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments()) - $subtract);
            return "/" .implode("/", $segments);
        }
        else{
            error_log("C");
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments()) - $subtract);
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
