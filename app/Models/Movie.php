<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function students() {
        return $this->belongsToMany('App\Models\Student', 'movie_student', 'movie_id', 'student_id');
    }

}
