<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->nome = $request->nome;
        $materia->conteudo = $request->conteudo;
        $materia->descrição = $request->descrição;
        $materia->tempo = $request->tempo;
        $materia->save();
        return redirect('/area_da_coordenação/{id}');
    }
}
