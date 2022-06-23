<?php

use Illuminate\Support\Facades\Route;

//
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\LogroController;
use App\Http\Controllers\GuiaController;

//LIVEWIRE
use App\Http\Livewire\ShowJuegos;
use App\Http\Livewire\ShowJuego;
use App\Http\Livewire\ShowLogro;
use App\Http\Livewire\Perfil;

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


//LIVEWIRE
Route::get('/show-juegos',ShowJuegos::class)->name('show-juegos');
Route::get('/show-juego/{juego}',ShowJuego::class)->name('show-juego');
Route::get('/show-logro/{logro}',ShowLogro::class)->name('show-logro');
Route::get('/perfil',Perfil::class)->name('show-perfil');


//TRADICIONALES
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//

Route::get('/',[JuegoController::class,'juego'])->name('verJuegos');

Route::resource('juegos', JuegoController::class);

Route::resource('logros', LogroController::class);

Route::resource('guias', GuiaController::class);

Route::get('/guias/create/{idLogro}',[GuiaController::class,'create2'])->name('guias.create2');

require __DIR__.'/auth.php';
