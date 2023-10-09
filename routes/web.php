<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


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

// se crea una ruta para acceder al index de usuarios
Route::get('usuarios',[UsuarioController::class,'index'])->name('usuarios.index');

// se crea una ruta para acceder al formulario
Route::get('usuarios/create',[UsuarioController::class,'create'])->name('usuarios.create');

// se crea para guardar la información
Route::post('usuarios',[UsuarioController::class,'store'])->name('usuarios.store');

// crear la ruta de visualizacion de un usuario
Route::get('usuarios/{usuario}',[UsuarioController::class,'show'])->name('usuarios.show') ;

// se crea una ruta para editar el formulario
Route::get('usuarios/{usuario}/edit',[UsuarioController::class,'edit'])->name('usuarios.edit');

// se crea una ruta para actualizar los datos del usuario
Route::put('usuarios/{usuario}',[UsuarioController::class,'update'])->name('usuarios.update');// se crea una ruta para actualizar los datos del paciente

// se crea una ruta para eliminar los datos del usuario
Route::delete('usuarios/{usuario}',[UsuarioController::class,'destroy'])->name('usuarios.destroy');