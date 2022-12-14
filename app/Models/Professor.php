<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function subject() {
        return $this->hasOne('App\Models\Subject','professor_id','id');
    }

}
