<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Materia;

class MateriaController extends Controller
{
    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->nome = $request->nome;
        $materia->conteudo = $request->conteudo;
        $materia->descricao = $request->descricao;
        $materia->tempo = $request->tempo;
        $materia->save();
        return redirect('/login');
    }
}
