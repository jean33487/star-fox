<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index()
    {
        $professor = Professor::all();

        return view('area_do_professor',['professores' => $professor]);
    }
}
