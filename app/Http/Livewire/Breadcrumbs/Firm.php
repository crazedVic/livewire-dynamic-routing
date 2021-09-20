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

        //add firms root link to firms routes
        if (count($segs) > 0 && strtolower($segs[0]) == 'firm')
        {
            $routes[] = ['name' => 'Firms', 'url' => 'firms'];
        }
        //add leads root link to firms routes
        elseif (count($segs) > 0 && strtolower($segs[0]) == 'lead')
        {
            $routes[] = ['name' => 'Leads', 'url' => 'leads'];
        }

        for ($i = 0; $i < count($segs); $i++)
        {
            if (strtolower($segs[$i]) == 'global')
            {
                $name = 'App\Models\Firm'::find(1)->name;
                $url = implode("/", array_slice($segs, 0, $i+1));
                $routes[] = ['name' => $name, 'url' => $url];
            }
            elseif (class_exists('App\Models\\' . $segs[$i]) && is_numeric($segs[$i + 1]))
            {
                $name = ('App\Models\\' . ucwords($segs[$i]))::find($segs[$i+1])->name;
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
