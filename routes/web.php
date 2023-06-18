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
Route::get('/estudiantes', [Estudiantes::class, 'index']);
Route::get('/calificaciones', [Calificaciones::class, 'index']);


//MANEJO DE FACULTADES
//llamar al metodo del controlador facultades index
Route::get('/facultades', [Facultades::class, 'index'])->name('listadofac'); //colocar nombre a la url

//llamar al metodo del controlador facultades form_registrar
Route::get('/registrar_facultades', [Facultades::class, 'form_registrar'])->name('reg_fac');

//llamar al metodo del controlador facultades registrar
Route::post('/registrar_facultad', [Facultades::class, 'registrar']);//post, pues envia datos de un formulario

//llamar al controlador facultades eliminar
Route::get('/facultades_eliminar/{id}', [Facultades::class, 'eliminar'])->name('elimina_fac');

//llamar al metodo del controlador facultades eliminar form_editar
Route::get('/editar_facultad/{id}', [Facultades::class, 'form_editar'])->name('edita_fac');

//llamar al metodo del controlador facultades editar
Route::post('/editar_fac/{id}', [Facultades::class, 'editar'])->name('edit_fac');

//MANEJO DE LOS PROGRAMAS
//llamar al metodo del controlador programa index
Route::get('/programas', [Programas::class, 'index'])->name('lista_prog'); //nombre a la ruta

//llamar al metodo del controlador programas form_registrar
Route::get('/resgistrar_programas', [Programas::class, 'form_registrar'])->name('f_reg_prog'); // ruta con nombre

//llamar al metodo del controlador programas registrar
Route::post('registrar_programa', [Programas::class, 'registrar'])->name('reg_prog');

//llamar al metodo del controlador programas form_registrar
Route::get('/editar_programas/{id}', [Programas::class, 'form_editar'])->name('f_edit_prog'); // ruta con nombre

//llamar al metodo del controlador programas editar
Route::post('/editar_programa/{id}', [Programas::class, 'editar'])->name('edit_prog'); // ruta con nombre

//llamar al metodo del controlador programas eliminar
Route::get('/eliminar_programa/{id}', [Programas::class, 'eliminar'])->name('elimina_prog'); // ruta con nombre

//MANEJO DE LOS PROFESORES
//llamar al metodo del controlador Profesores index
Route::get('/profesores', [Profesores::class, 'index'])->name('lista_prof'); //nombre a la ruta

//llamar al metodo del controlador Profesores form_registrar
Route::get('/resgistrar_profesores', [Profesores::class, 'form_registrar'])->name('f_reg_prof'); // ruta con nombre

//llamar al metodo del controlador Profesores registrar
Route::post('registrar_profesor', [Profesores::class, 'registrar'])->name('reg_prof');

//llamar al metodo del controlador Profesores form_registrar
Route::get('/editar_profesores/{id}', [Profesores::class, 'form_editar'])->name('f_edit_prof'); // ruta con nombre

//llamar al metodo del controlador Profesores editar
Route::post('/editar_profesor/{id}', [Profesores::class, 'editar'])->name('edit_prof'); // ruta con nombre

//llamar al metodo del controlador Profesores eliminar
Route::get('/eliminar_profesor/{id}', [Profesores::class, 'eliminar'])->name('elimina_prof'); // ruta con nombre