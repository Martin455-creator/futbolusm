<?php

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

Route::view("/","home")->name("home");

Route::view("/agregar_jugador", "agregar_jugador")->name("agregar_jugador");

Route::view("/ver_jugador", "ver_jugador")->name("ver_jugador");

Route::view("/registrar_entrenador", "registrar_entrenador")->name("registrar_entrenador");

Route::view("/ver_entrenador", "ver_entrenador")->name("ver_entrenador");

Route::view("/calendario", "calendario")->name("calendario");

Route::view("/registro_destacado", "registro_destacado")->name("registro_destacado");

Route::view("/ver_destacado", "ver_destacado")->name("ver_destacado");

Route::view("/registro_partido", "registro_partido")->name("registro_partido");

Route::view("/datos_partido", "datos_partido")->name("datos_partido");