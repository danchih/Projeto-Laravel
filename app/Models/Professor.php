<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    public function subject() {
        return $this->belongsTo('App\Models\Subject','professor_id');
    }

}
