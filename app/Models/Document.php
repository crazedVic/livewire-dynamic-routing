<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public $guarded = [];

    public function documentof()
    {
        return $this->morphTo();
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteof');
    }
}
