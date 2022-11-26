<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class AlunoCoontroller extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('area_do_aluno',['alunos' => $alunos]);
    }

    public function show()
    {
        $event = Event::FindOrFFail($id);

        return view('users.show', ['user' => $user]);                                              
    }

}
