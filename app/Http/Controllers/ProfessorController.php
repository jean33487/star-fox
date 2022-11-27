<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index(){
        
        return view('dashboards.professors.index');
        }
    
        function profile(){
            return view('dashboards.professors.profile');
        }
        function settings(){
            return view('dashboards.professors.settings');
        }
}