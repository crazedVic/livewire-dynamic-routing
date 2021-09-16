<?php

namespace App\Http\Livewire\Leads;

use Livewire\Component;
use App\Models\Lead;

class Index extends Component
{
    public function render()
    {
        return view('livewire.leads.index',
        ['leads' => Lead::all()]);

    }

    public function getUrl($id){
        return "/lead/" . $id;
     }
}
