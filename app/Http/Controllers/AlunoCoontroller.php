<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class AlunoCoontroller extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos',['alunos' => $alunos]);
    }

    public function create()
    {
        return view('alunos.create');
    }

}
