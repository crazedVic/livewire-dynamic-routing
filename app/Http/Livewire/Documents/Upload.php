<?php

namespace App\Http\Livewire\Documents;

use App\Models\Document;
use Livewire\Component;

class Upload extends Component
{
    public $owner;
    public $dept;

    public function uploadDocument()
    {
        $document = new Document([
            'dept' => $this->dept,
            'name' => 'New Document ' . random_int(0,4000),
            'description' => 'Default description',
        ]);

        $this->owner->documents()->save($document);
    }

    public function render()
    {
        return view('livewire.documents.upload');
    }
}
