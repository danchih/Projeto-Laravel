<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index(){
        
        $professors = Professor::all();

        return view('professors',['professors' => $professors]);
    }
}
