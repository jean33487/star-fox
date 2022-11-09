<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    public function index()
    {
        return view('aluno.index');
    }
}
