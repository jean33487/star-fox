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

    function update(Request $request){
        
        User::findOrFail($request->id)->update($request->all());

        

        return view('login');
    }



}
