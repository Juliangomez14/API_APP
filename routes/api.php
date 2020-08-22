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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
});
Route::resource('estadoDisponibilidades','estadoDisponibilidadesController')->except(['create', 'store', 'update', 'destroy','edit']);
Route::resource('estudios','estudiosController')->except(['create', 'store', 'update', 'destroy','edit']);
Route::resource('estudiosTrabajadores','estudiosTrabajadoresController')->except(['create', 'store', 'update', 'destroy','edit']);
Route::resource('experiencias','experienciasController')->except(['create', 'store', 'update', 'destroy','edit']);
Route::resource('experienciasTrabajadores','experienciasTrabajadoresController')->except(['create', 'store', 'update', 'destroy','edit']);
Route::resource('perfilesLaborales','perfilesLaboralesController')->except(['create', 'store', 'update', 'destroy','edit']);
Route::resource('trabajadores','trabajadoresController')->except(['create', 'store', 'update', 'destroy','edit']);