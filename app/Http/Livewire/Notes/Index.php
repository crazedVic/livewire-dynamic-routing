<?php

namespace App\Http\Livewire\Notes;

use Livewire\Component;

class Index extends Component
{

    public $owner;

    public function render()
    {
        return view('livewire.notes.index');
    }

    public function getUrl($id){
        $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments())-1);
        return "/" .implode("/", $segments) . "/note/" . $id;
     }
}
