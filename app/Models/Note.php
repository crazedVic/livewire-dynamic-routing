<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public function noteof()
    {
        return $this->morphTo();
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteof');
    }

    public function documents(){
        return $this->morphMany(Document::class, 'documentof');
    }
}
