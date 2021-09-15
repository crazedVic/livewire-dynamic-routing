<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Routes extends Component
{

    public $parents = [];
    public $subview = "";
    public $children = [];
    public $core;

    public function mount(){

        $latest_id = 0;

        if(sizeof(\Request()->segments()) == 0){
            $this->core = null;
            return;
        }

        foreach(array_reverse(\Request()->segments()) as $segment)
        {
            $segment = strtolower($segment);

            if(is_numeric($segment))
            {
                $latest_id = $segment;
            }
            else{
                $str_class = 'App\\Models\\'. ucwords($segment);
                if(class_exists($str_class)){
                    $model = $str_class::findOrFail($latest_id);
                    $this->parents[] = $model;
                    $this->children[] = $segment . "s";

                }
                else{
                    //most likely a subview (but can only exist on very first segment)
                    if($this->subview == "")
                        $this->subview = $segment;
                    else
                        $this->subview = $segment . "-" . $this->subview ;
                }
            }
        }


        // no trailing segment found.
        if (!$this->subview){
            $this->subview = "details";
        }

        if(sizeof($this->parents) == 0){

            if(get_class($this->core) != "App\\Models\\Firm" &&
                get_class($this->core) != "App\\Models\\Lead" )
                abort(404);
        }
        else{

            //check entire hierarchy to make sure owners are valid.
            for($x=0;$x<sizeof($this->parents)-1;$x++){
                // immediate parent doesn't have this core as a child
                if(!isset($this->parents[$x+1][$this->children[$x]])){
                    dd( get_class($this->parents[$x+1]). ' doesn\'t have collection ' . $this->children[$x]);
                    //abort(404);
                }

                if(!$this->parents[$x+1][$this->children[$x]]->contains($this->parents[$x])){
                    dd('parent has collection but not this child');
                    //abort(404);
                }
            }
        }

        // establish core view, would be the first one in the array
        // based on other rules i think
        $this->core = array_shift($this->parents);

        if(!$this->core){
            abort(404);
        }
    }


    public function render()
    {
        return view('livewire.routes');
    }
}
