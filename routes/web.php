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
/*iniciando o use dos controllers*/
use App\Http\Controllers\AlunoCoontroller;

use App\Http\Controllers\ProfessorController;

/* rota da pagina inicial */
Route::get('/', function () {
    return view('welcome');
});

/* rota da pagina de login do aluno */
Route::get('/alunos', function () {
    return view('alunos');
});

/* rota da pagina logada do aluno */
Route::get('/area_do_aluno/{id}', [AlunoCoontroller::class, 'index'] );

/* rota da pagina de login do professor */
Route::get('/professores', function () {
    return view('professor');

});

/* rota da pagina logada do professor */
Route::get('/area_do_professor/{id}', [ProfessorController::class, 'index'] );

/* rota da pagina de login da cordenação */
Route::get('/coordenação', function () {
    return view('coordenação');
});

/* rota da pagina logada da cordenação */
Route::get('/area_da_coordenação/{id}', function () {
    return view('area_da_coordenação');
});

/* rota para a pagina de criar nova materia */
Route::get('/Criar_nova_materia', function () {
    return view('Criar_nova_materia');
});

Route::post('/Criar_nova_materia', [MateriaController::class, 'store'] );


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
