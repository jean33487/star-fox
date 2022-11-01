<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Aluno;

class alunos extends Controller
{
    public function index(){

        $alunos = Aluno::all();

        return view('welcome',['alunos' => $alunos])
    }
}
