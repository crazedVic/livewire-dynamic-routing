<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;

class ExamplePage extends Component
{   
    //a number to differentiate instances of the example page
    public $number;

    public function render()
    {
        return view('livewire.config.example-page');
    }
}
