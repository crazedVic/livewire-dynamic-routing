<?php

namespace App\Http\Livewire\Documents;

use Livewire\Component;

class Index extends Component
{

    public $owner;
    public $dept;
    public $documents;

    public function mount($owner, $dept= null){
        if($dept)
            $this->documents = $owner->documents()->where('dept',$dept)->get();
        else
            $this->documents = $owner->documents;
    }

    public function render()
    {

        return view('livewire.documents.index');
    }

    public function getUrl($id){
       if($this->dept){
           $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments())-2);
       }
       else{
            $segments = array_slice(\Request()->segments(),0,sizeof(\Request()->segments())-1);
       }

       return "/" .implode("/", $segments) . "/document/" . $id;
    }
}
