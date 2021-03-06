<?php

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/login','UserController@login');
Route::get('/users', 'UserController@index');
Route::get('/endereco', 'EnderecoController@index');
Route::post('/coordenadas', 'EnderecoController@coordenadas');
Route::post('/cadastro', 'UserController@store');
Route::post('/animais', 'AnimalController@store');

