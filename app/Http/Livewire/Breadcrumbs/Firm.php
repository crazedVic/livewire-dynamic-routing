<?php

namespace App\Http\Livewire\Breadcrumbs;

use App\Models\Employee;
use App\Models\Business;
use App\Models\Document;
use App\Models\Lead;
use App\Traits\FormLookups;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Firm extends Component
{
    public $packages;
    public $models;
    public $routes;

    public function mount()
    {
        $segs = request()->segments();
        $routes = [];

        //determine department
        $dept = isset(\Request::segments()[2])? ucwords(\Request::segments()[2]) : null;
        if ($dept == 'Hr') $dept = 'HR';

        for ($i = 0; $i < count($segs); $i++)
        {
            if (strtolower($segs[$i]) == 'global')
            {
                $name = 'App\Models\Firm'::find(1)->name;
                $url = implode("/", array_slice($segs, 0, $i+1));
                $routes[] = ['name' => $name, 'url' => $url];
            }
            elseif (in_array(strtolower($segs[$i]), ['marketing', 'operations', 'all', 'legal', 'hr', 'finance'])) 
            {   
                //skip singular departments
                continue;
            }
            elseif (strtolower($segs[$i]) == 'documents')
            {
                //add specific view link
                $url = implode("/", array_slice($segs, 0, $i+1));
                $routes[] = ['name' => $dept . ' Documents', 'url' => $url];
                
            }
            elseif (class_exists('App\Models\\' . $segs[$i]) && is_numeric($segs[$i + 1]))
            {
                //add index view link (with exceptions)
                if 
                (
                    strtolower($segs[$i] != 'firm')  //skipped because it's not needed
                )
                {
                    //determine name of index view
                    if ($segs[$i] == 'document')
                        $name = $dept . ' Documents';
                    else
                        $name = ucwords($segs[$i] . 's');

                    $url = implode("/", array_slice($segs, 0, $i+1)) . 's';
                    $routes[] = ['name' => $name, 'url' => $url];
                }
                
                $name = ('App\Models\\' . ucwords($segs[$i]))::find($segs[$i+1])->name;

                //add specific view link
                $url = implode("/", array_slice($segs, 0, $i+2));
                $routes[] = ['name' => $name, 'url' => $url];
                
                //manually skip forward to 
                //prevent number from being 
                //turned into its own route
                $i++;
            }
            else
            {
                $routes[] = ['name' => ucwords($segs[$i]), 'url' => implode("/", array_slice($segs, 0, $i+1))];
            }
        }

        $this->routes = $routes;
    }

    public function render()
    {
        return view('livewire.breadcrumbs.firm');
    }
}
