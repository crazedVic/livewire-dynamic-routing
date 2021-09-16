<?php

namespace App\Http\Livewire\Documents;

use App\Models\Document;
use Livewire\Component;

class Upload extends Component
{
    public $owner;
    public $dept;

    public $name;
    public $description;

    public function mount()
    {
        $this->dept = $this->dept?: 'Operations';
    }

    public function uploadDocument()
    {
        $document = new Document([
            'dept' => $this->dept,
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->owner->documents()->save($document);
    }

    public function render()
    {
        return view('livewire.documents.upload');
    }
}
