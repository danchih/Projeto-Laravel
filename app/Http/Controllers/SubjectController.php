<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subject;
use App\Models\Student;

class SubjectController extends Controller
{
    public function index(){
        
        $subjects = Subject::all();

        return view('subjects',['subjects' => $subjects]);
    }


    public function allstudents($id) {

        $subject = Subject::find($id);
        $students = $subject->students;
        
        return view('subjectinfo', compact('subject', 'students'));

    }


}
