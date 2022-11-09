<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Cordenacao;
use App\Http\Controllers\Aluno;
use App\Http\Controllers\Adm;
use App\Http\Controllers\Professor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', function () {
    return view('alunos');
});

Route::get('/cordenação', function () {
    return view('cordenação');
});

Route::get('/professores', function () {
    return view('professores');
});

Route::get('/area_do_aluno/{id}', function ($id = null) {
    return view('area_do_aluno',[id => $id]);
});

Route::get('/area_do_professor/{id}', function ($id = null) {
    return view('area_do_professor',[id => $id]);
});

Route::get('/area_da_cordenação/{id}', function ($id = null) {
    return view('area_da_cordenação',[id => $id]);
});