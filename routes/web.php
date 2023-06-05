<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/facultades', [Facultades::class, 'index'])->name('listadofac'); //colocar nombre a la url
Route::get('/programas', [Programas::class, 'index']);
Route::get('/profesores', [Profesores::class, 'index']);
Route::get('/estudiantes', [Estudiantes::class, 'index']);
Route::get('/calificaciones', [Calificaciones::class, 'index']);

//metodo del controlador facultades agregar
Route::get('/registrar_facultades', [Facultades::class, 'form_registrar']);

//metodo para meter los datos a la base de datos, está en el controlador
Route::post('/registrar_facultades', [Facultades::class, 'registrar']);

//metodo del controlador facultades eliminar
Route::get('/facultades_eliminar/{id}', [Facultades::class, 'eliminar'])->name('elimina_fac');
