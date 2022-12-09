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
        $user = auth()->user();

        return view('dashboards.users.settings', ['user'=>$user]);
    }



}
