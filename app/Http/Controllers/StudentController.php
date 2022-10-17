<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Movie;

class StudentController extends Controller
{
    public function index(){
        
        $students = Student::all();

        return view('students',['students' => $students]);
    }

}
