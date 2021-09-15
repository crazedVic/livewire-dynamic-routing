<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function documents(){
        return $this->morphMany(Document::class, 'documentof');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteof');
    }

    public function firm()
    {
        return $this->belongsTo(Firm::class);
    }
}
