<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    use HasFactory;

    public function documents(){
        return $this->morphMany(Document::class, 'documentof');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteof');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
