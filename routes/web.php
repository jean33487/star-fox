<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\Materia;
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


use App\Http\Controllers\MateriaController;
use App\Http\Controllers\Auth\RegisterController;



/* rota da pagina inicial */
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});


Route::group(['prefix'=>'admin', 'middleware' =>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');


    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
});

Route::group(['prefix'=>'user', 'middleware' =>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class,'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');//rota para o perfil do usuario para passaar dados do banco para a blade restrita dele 
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
    
});

Route::group(['prefix'=>'professor', 'middleware' =>['isProfessor','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [ProfessorController::class,'index'])->name('professor.dashboard');
    Route::get('profile', [ProfessorController::class, 'profile'])->name('professor.profile');
    Route::get('settings', [ProfessorController::class, 'settings'])->name('professor.settings');
});




/* rota da pagina de login do aluno */
Route::get('/alunos', function () {
    return view('alunos');
});

/* rota da pagina logada do aluno */
Route::get('/area_do_aluno/{id}', [AlunoController::class, 'index'] );

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
Route::get('/criar_novo_curso', function () {
    return view('criar_novo_curso');
});

/* rota para a pagina de entrar numa materia */
Route::get('/showmaterias', function () {
    return view('showmaterias');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/edituser', function () {
    return view('edituser');
});

/* rota a logica da laravel na parte de controller */
Route::post('/criar_novo_curso', [MateriaController::class, 'store'] );

Route::post('/dashboard',[RegisterController::class, 'register']);

Route::get('/user/{id}', [UserController::class, 'show'] );


Route::get('/user/{id}', [UserController::class, 'edit'] );

Route::get('/materias/join/{id}', [MateriaController::class, 'joinMateria'] );

Route::get('/showmaterias', [MateriaController::class, 'index'] );

Route::get('/dashborad', [UserController::class, 'settings'] );


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
