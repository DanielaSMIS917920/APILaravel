<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//listar todas las galerias
Route::get('galleries', 'App\Http\Controllers\GalleryController@index');
//listar una galeria
Route::get('Gallery/{id}', 'App\Http\Controllers\GalleryController@show');
//crear una nueva galeria
Route::post('Gallery', 'App\Http\Controllers\GalleryController@store');
//actualizar galeria
Route::put('Gallery', 'App\Http\Controllers\GalleryController@store');
//eliminar galeria
Route::delete('Gallery/{id}', 'App\Http\Controllers\GalleryController@destroy');
