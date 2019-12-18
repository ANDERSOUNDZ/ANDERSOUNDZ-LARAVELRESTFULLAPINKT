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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/artista', 'ArtistaController@index');

Route::put('/artista/actualizar', 'ArtistaController@update');

Route::post('/artista/guardar', 'ArtistaController@store');

Route::delete('/artista/borrar/{id}', 'ArtistaController@destroy');

Route::get('/artista/buscar', 'ArtistaController@show');