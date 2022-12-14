<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function subject() {
        return $this->belongsTo('App\Models\Subject', 'subject_id', 'id');
    }

    public function movies() {
        return $this->belongsToMany('App\Models\Movie', 'movie_student', 'student_id', 'movie_id');
    }

}
