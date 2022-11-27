<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;

class ProfessorController extends Controller
{
    function index(){
        
        return view('dashboards.professores.index');
        }
    
        function profile(){
            return view('dashboards.professores.profile');
        }
        function settings(){
            return view('dashboards.professores.settings');
        }

        public function store(Request $request)
    {
        $professor = new Professor();
        $professor->name = $request->name;
        $professor->email = $request->email;
        $professor->UsuarioOficial = $request->UsuarioOficial;
        $professor->cep = $request->cep;
        $professor->rua = $request->rua;
        $professor->bairro = $request->bairro;
        $professor->uf = $request->uf;
        $professor->cidade = $request->cidade;
        $professor->CPF = $request->CPF;
        $professor->password = $request->password;
        $professor->save();
        return redirect('/area_da_coordenação/1');
    }

}
