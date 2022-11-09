<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    public function index()
    {
        return view('professor.index');
    }
}
