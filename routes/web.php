<?php

use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Relojs\CreateRelojs;
use App\Http\Livewire\Relojs\DeleteRelojs;
use App\Http\Livewire\Relojs\EditRelojs;
use App\Http\Livewire\Relojs\IndexRelojs;
use App\Http\Livewire\Relojs\ShowRelojs;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use App\Http\Livewire\Ventas\CreateVentas;
use App\Http\Livewire\Ventas\IndexVentas;
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

Route::get('/login', Login::class)->name('login');
Route::get('/usuarios/create', CreateUsuario::class)->name("createUsuarios");


//proteger rutas
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', IndexRelojs::class)->name("indexrelojs");
    Route::get('/reloj', IndexRelojs::class)->name("indexrelojs");
    Route::get('/reloj/create', CreateRelojs::class)->name("createrelojs");
    Route::get('/reloj/{reloj}/edit', EditRelojs::class)->name('editrelojs');
    Route::get('/reloj/{reloj}/show', ShowRelojs::class)->name('showrelojs');
    Route::get('/reloj/{reloj}/delete', DeleteRelojs::class)->name('deleterelojs');

    //rutas modulo usuario

    Route::get('/usuarios', IndexUsuarios::class)->name("indexUsuarios");
    Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name("editUsuarios");
    Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name("showUsuarios");
    Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name("deleteUsuarios");

    //modulo ventas
    Route::get('/ventas', IndexVentas::class)->name("indexventas");
    Route::get('/ventas/create', CreateVentas::class)->name('createventas');
});
