<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        
        return view('events.welcome');

    }

    public function createAL() {
        return view('events.areadoaluno');
    }

    public function createPROF() {
        return view('events.areadoprofessor');
    }

    public function createSEC() {
        return view('events.areadasecretaria');
    }
}
