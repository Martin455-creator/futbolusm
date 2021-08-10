<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;
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
    return $request->user();
});

Route::get("posicion/get", [ConsolasController::class, "getPosicion"]);
Route::get("jugador/get", [ConsolasController::class, "getJugador"]);
Route::post("jugador/post", [ConsolasController::class, "crearJugador"]);

Route::get("division/get", [ConsolasController::class, "getDivision"]);
Route::get("entrenador/get", [ConsolasController::class, "getEntrenador"]);
Route::post("entrenador/post", [ConsolasController::class, "crearEntrenador"]);

Route::get("division1/get", [ConsolasController::class, "getDivision1"]);
Route::get("destacado/get", [ConsolasController::class, "getDestacado"]);
Route::post("destacado/post", [ConsolasController::class, "crearDestacado"]);

Route::get("categoria/get", [ConsolasController::class, "getCategoria"]);
Route::get("partido/get", [ConsolasController::class, "getPartido"]);
Route::post("partido/post", [ConsolasController::class, "crearPartido"]);



