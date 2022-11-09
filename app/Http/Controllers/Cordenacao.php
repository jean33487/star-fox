<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cordenacao extends Controller
{
    public function index()
    {
        return view('cordenacao.index');
    }
}
