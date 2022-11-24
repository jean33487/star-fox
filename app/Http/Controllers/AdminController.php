<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
