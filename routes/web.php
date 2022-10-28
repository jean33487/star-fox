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

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'],'/endereco',function(){
    return view('endereco');
});

Route::get('/requisicao', function () {
    $json = \Illuminate\Support\Facades\Http::get('https://learn-laravel.cf/movie/1')->body();
    dd($json);
});