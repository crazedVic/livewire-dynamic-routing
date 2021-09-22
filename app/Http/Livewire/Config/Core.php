<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;

class Core extends Component
{   
    public $subview;

    public function mount()
    {   
        //remove 'config' from segments
        $segs =  \Request::segments();
        $segs = array_splice($segs, 1);

        //home page only
        if (count($segs) == 0)
        {
            $this->subview = "home";
        }
        //use only element
        elseif (count($segs) == 1)
        {
            $this->subview = $segs[0];
        }
        else
        {
            //build subview
            $this->subview = array_shift($segs);
 
            foreach($segs as $segment)
            {
                $this->subview .= '-' . $segment;
            }
        }
    }

    public function render()
    {
        return view('livewire.config.core');
    }
}
