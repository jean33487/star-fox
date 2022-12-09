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
        $materia->professor= $request->professor;
        $materia->save();
        return redirect('/register');
    }

    public function joinMateria($id)
    {
        $user = auth()->user();
        $user->materiasAsParticipant()->attach($id);
        $materias = Materia::findOrFail($id);
        return redirect('/login')->with('msg', 'Você entrou no curso: '.$materias->nome);
    }

    public function index(){
        $materias = Materia::all();
        return view('showmaterias',['materias'=>$materias]);
    }

}
