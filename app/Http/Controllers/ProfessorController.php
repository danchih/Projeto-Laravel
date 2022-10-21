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

    public function create(){
        return view('cadastros.create');
    }

    public function store(Request $request){

        Professor::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/professors');
    }

}
