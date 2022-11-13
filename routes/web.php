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

use App\Http\Controllers\AlunoCoontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', function () {
    return view('alunos');
});

//Route::get('/alunos', [AlunoCoontroller::class, 'index']);

Route::get('/area_do_aluno/{id}', [AlunoCoontroller::class, 'index'] );

Route::get('/prefessores', function () {
    return view('professores');

});

Route::get('/area_do_prefessores/{id}', function () {
    return view('professores');

});

Route::get('/coredenação', function () {
    return view('cordenação');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
