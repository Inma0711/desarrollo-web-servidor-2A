<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlatoController;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\TipoPlatoController;
//use App\Http\Controllers\CartaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {
    return view('hola');
});
Route::get('/adios', function () {
    return view('adios');
});
//Route::get('/platos', [PlatoController::Class, 'index']);

Route::resource('/platos', PlatoController::class);

Route::resource('/bebidas', BebidaController::class);

Route::resource('/tipos_platos', TipoPlatoController::class);
//Route::resource('carta', CartaController::class);

