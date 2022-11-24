<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Materia;

class MateriaController extends Controller
{
    public function store(Request $request)
    {
        $materi = new Materia();
        $materi->nome = $request->nome;
        $materi->conteudo = $request->conteudo;
        $materi->descrição = $request->descrição;
        $materi->tempo = $request->tempo;
        $materi->save();
        return redirect('/area_da_coordenação/1');
    }
}
