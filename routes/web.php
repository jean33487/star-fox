<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;

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

use App\Http\Controllers\AlunoController;

use App\Http\Controllers\ProfessorController;

use App\Http\Controllers\MateriaController;

use App\Http\Controllers\UserController;

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
});

Route::group(['prefix'=>'user', 'middleware' =>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class,'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
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
/* rota a logica da laravel na parte de controller */
Route::post('/criar_novo_curso', [MateriaController::class, 'store'] );

/* rota para a pagina de criar novo user */
Route::get('/user/{id}', [UserController::class, 'show'] );



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
