<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Routes extends Component
{
    public $parents = [];
    public $subview = "";
    public $children = [];
    public $core;

    public function mount()
    {
        $segs = \Request::segments();

        //disallow routes with hyphens
        if (str_contains(\Request::path(), '-'))
        {
            abort(419, 'Invalid URL');
        }

        $latest_id = 0;

        if(sizeof($segs) == 0){
            $this->core = null;
            return;
        }

        if (strtolower($segs[0]) == 'global')
        {
            $segs = array_slice($segs, 1, count($segs));
            $segs = array_merge(['firm', 1], $segs);
        }

        $previous_segment_is_numeric = false;
        $dept = null;

        foreach(array_reverse($segs) as $segment)
        {
            $segment = strtolower($segment);
            
            if (in_array(strtolower($segment), ['marketing', 'operations', 'all', 'legal', 'hr', 'finance']))
            {
                $dept = $segment;

                //*can use department security here

                //skip segment, not used for routing
                continue;
            }

            if(is_numeric($segment))
            {
                $previous_segment_is_numeric = true;
                $latest_id = $segment;
            }
            else{
                $str_class = 'App\\Models\\'. ucwords($segment);

                if ($previous_segment_is_numeric && !class_exists($str_class))
                {
                    abort(419, 'Model does not exist');
                }
                elseif(class_exists($str_class)){
                    $model = $str_class::find($latest_id);
                    if(!$model)
                        abort(419, 'Record not found');
                    $this->parents[] = $model;
                    $this->children[] = $segment . "s";

                }
                elseif (sizeof($this->parents) == 0)
                {
                    //most likely a subview (but can only exist on very first segment)
                    if($this->subview == "")
                        $this->subview = $segment;
                    else
                        $this->subview = $segment . "-" . $this->subview ;
                }
                else
                {
                    abort(419, 'Error');
                }

                $previous_segment_is_numeric = false;
            }
        }

        //url without department not allowed
        if (count($segs) > 2 && !$dept){
            abort(419, 'No department');
        }

        // no trailing segment found.
        if (!$this->subview){
            $this->subview = "details";
        }

        if(sizeof($this->parents) > 1){    
            //check entire hierarchy to make sure owners are valid.
            for($x=0;$x<sizeof($this->parents)-1;$x++){
                // immediate parent doesn't have this core as a child
                if(!isset($this->parents[$x+1][$this->children[$x]])){
                    abort(419, get_class($this->parents[$x+1]). ' doesn\'t have collection ' . $this->children[$x]);
                }

                if(!$this->parents[$x+1][$this->children[$x]]->contains($this->parents[$x])){
                    abort(419, 'Child not member of collection');
                }
            }

            // establish core view, would be the first one in the array
            // based on other rules i think
            $this->core = array_shift($this->parents);
        }
        else
        {
            // establish core view, would be the first one in the array
            // based on other rules i think
            $this->core = array_shift($this->parents);
            
            if(get_class($this->core) != "App\\Models\\Firm" &&
            get_class($this->core) != "App\\Models\\Lead")
            {
                abort(419, 'Not lead or firm');
            }
        }

        if(!$this->core){
            abort(419, 'No core');
        }

        //check if department is allowed for core
        if (strtolower($dept) != 'hr' && get_class($this->core) == 'App\Models\Employee'){
            abort(419, 'Department not allowed');
        }  
    }

    public function render()
    {
        return view('livewire.routes');
    }
}
