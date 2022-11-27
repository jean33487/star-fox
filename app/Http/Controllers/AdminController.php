<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    function index(){
        
        return view('dashboards.admins.index');
        }
    
        function profile(){
            return view('dashboards.admins.profile');
        }
        function settings(){
            return view('dashboards.admins.settings');
        }

        function updateInfo(Request $request){
            $validator = \Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required|email|unique:users,email,'.Auth::user()->id,
                'UsuarioOficial'=>'required',
                'FilmeFavorito'=>'required',
                'cep'=>'required',
                'rua'=>'required',
                'bairro'=>'required',
                'uf'=>'required',
                'cidade'=>'required',
                'CPF'=>'required',

            ]);

            if(!$validator->passes()){
                return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
            }else{
                $query = User::find(Auth::user()->id)->updata([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'UsuarioOficial'=>$request->UsuarioOficial,
                    'FilmeFavorito'=>$request->FilmeFavorito,
                    'cep'=>$request->cep,
                    'rua'=>$request->rua,
                    'bairro'=>$request->bairro,
                    'uf'=>$request->uf,
                    'cidade'=>$request->cidade,
                    'CPF'=>$request->CPF,
                ]);

                if(!$query){
                    return response()->json(['status'=>0,'msg'=>'Algo deu errado.']);
                }else{
                    return response()->json(['status'=>1,'msg'=>'Suas informações foram alteradas com sucesso.']);
                }
            }
            
        }
}

