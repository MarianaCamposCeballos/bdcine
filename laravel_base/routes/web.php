<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//Route::resource('users', UserController::class);
Route::resource("generos",\App\Http\Controllers\GeneroController::class);
Route::resource("cines",\App\Http\Controllers\CineController::class);
Route::resource("clasificaciones",\App\Http\Controllers\ClasificacionController::class);
Route::resource("descuentos",\App\Http\Controllers\DescuentoController::class);
Route::resource("dias",\App\Http\Controllers\DiaController::class);
Route::resource("directores",\App\Http\Controllers\DirectorController::class);
Route::resource("horarios",\App\Http\Controllers\HorarioController::class);
Route::resource("peliculas",\App\Http\Controllers\PeliculaController::class);
Route::resource("protagonistas",\App\Http\Controllers\ProtagonistaController::class);
Route::resource("salas",\App\Http\Controllers\SalaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

