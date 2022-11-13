<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorfessorController extends Controller
{
 
    public function index()
    {
        $professores = Professor::all();

        return view('professores',['professores' => $professores]);
    }
}
