<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaInicialController extends Controller
{
    public function index(){
        return view('events.welcome');
    }



}