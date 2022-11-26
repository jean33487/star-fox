<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(){
        
    return view('dashboards.users.index');
    }

    function profile(){
        return view('dashboards.users.profile');
    }
    function settings(){
        return view('dashboards.users.settings');
    }

    public function show($id)
    {
        $users = User::FindOrFail($id);

        return view('events.show', ['aluno' => $users]);                                              
    }


}
