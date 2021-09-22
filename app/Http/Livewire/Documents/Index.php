<?php

namespace App\Http\Livewire\Documents;

use Livewire\Component;

class Index extends Component
{
    public $owner;
    public $dept;
    public $documents;

    public function mount($owner, $dept= null){
        $this->dept = \Request::segments()[2];

        if($this->dept != 'all')
            $this->documents = $owner->documents()->where('dept',$this->dept)->get();
        else
            $this->documents = $owner->documents;
    }

    public function render()
    {
        return view('livewire.documents.index');
    }
}
