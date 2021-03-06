<?php

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

Route::get('/index','UserController@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/mapa', function () {
    return view('mapa');
});
Route::get('/cadastro', function () {
    return view('registro');
});
Route::get('/logado', function () {
    return view('logado');
});
Route::get('/cadastro-animais', function () {
    return view('cadastroAnimais');
});
