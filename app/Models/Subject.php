<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function professor() {
        return $this->belongsTo('App\Models\Professor','professor_id','id');
    }

    public function students() {
        return $this->hasMany('App\Models\Student', 'subject_id', 'id');
    }

}
