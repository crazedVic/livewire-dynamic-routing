<?php

namespace App\Http\Livewire\Firms;

use Livewire\Component;
use App\Models\Firm;

class Index extends Component
{
    public function render()
    {
        return view('livewire.firms.index',
        ['firms' => Firm::all()]);

    }

    public function getUrl($id){
        return "/firm/" . $id;
     }
}
