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

use App\Http\Controllers\PaginaInicialController;
Route::get('/',[PaginaInicialController::class, 'index']);

use App\Http\Controllers\AlunoLoginController;
Route::get('/areadoaluno/login',[AlunoLoginController::class, 'index']);

use App\Http\Controllers\ProfessorLoginController;
Route::get('/areadoprofessor/login',[ProfessorLoginController::class, 'index']);

use App\Http\Controllers\SecretariaLoginController;
Route::get('/areadasecretaria/login',[SecretariaLoginController::class, 'index']);



