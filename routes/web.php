<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VehiculoController;
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

//Usuarios//

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
Route::put('usuarios/{usuario}',[UsuarioController::class,'update'])->name('usuarios.update');// se crea una ruta para actualizar los datos del usuario

// se crea una ruta para eliminar los datos del usuario
Route::delete('usuarios/{usuario}',[UsuarioController::class,'destroy'])->name('usuarios.destroy');


//Vehículos//

// se crea una ruta para acceder al index de vehículos
Route::get('vehiculos',[VehiculoController::class,'index'])->name('vehiculos.index');

// se crea una ruta para acceder al formulario
Route::get('vehiculos/create',[VehiculoController::class,'create'])->name('vehiculos.create');

// se crea para guardar la información
Route::post('vehiculos',[VehiculoController::class,'store'])->name('vehiculos.store');

// crear la ruta de visualizacion de un vehículo
Route::get('vehiculos/{vehiculo}',[VehiculoController::class,'show'])->name('vehiculos.show') ;

// se crea una ruta para editar el formulario
Route::get('vehiculos/{vehiculo}/edit',[VehiculoController::class,'edit'])->name('vehiculos.edit');

// se crea una ruta para actualizar los datos del vehiculo
Route::put('vehiculos/{vehiculo}',[VehiculoController::class,'update'])->name('vehiculos.update');// se crea una ruta para actualizar los datos del vehículo

// se crea una ruta para eliminar los datos del vehiculo
Route::delete('vehiculos/{vehiculo}',[VehiculoController::class,'destroy'])->name('vehiculos.destroy');

