<?php

use Illuminate\Http\Request;

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

// Lista todos estudantes
Route::get('student', 'StudentController@index');

// Cria um novo estudante
Route::post('student', 'StudentController@store');

// Busca dos dados de um estudante
Route::get('student/{studentId}', 'StudentController@show');

// Atualiza os dados de um estudante
Route::put('student/{studentId}', 'StudentController@update');

// Remove um estudante
Route::delete('student/{studentId}', 'StudentController@destroy');


