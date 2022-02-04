<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RespuestasController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\CuestionarioController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*------------------------------ Respuestas -----------------------------------------*/

Route::get('/TodosRespuestas', [RespuestasController::class, 'Todos']);
Route::post('/RellenarRespuestas',[RespuestasController::class, 'Insertar']);
Route::post('/ActualizarRespuestas',[RespuestasController::class, 'update']);
Route::post('/EliminarRespuestas/{id}',[RespuestasController::class, 'destroy']);

/*----------------------------------------------------------------------------------*/

/*------------------------------ Preguntas -----------------------------------------*/

Route::get('/TodosPreguntas', [PreguntasController::class, 'Todos']);
Route::post('/RellenarPreguntas',[PreguntasController::class, 'Insertar']);
Route::post('/ActualizarPreguntas',[PreguntasController::class, 'update']);
Route::post('/EliminarPreguntas/{id}',[PreguntasController::class, 'destroy']);

/*----------------------------------------------------------------------------------*/

/*------------------------------ Cuestionario ---------------------------------------*/

Route::get('/TodosCuestionario', [CuestionarioController::class, 'Todos']);
Route::post('/RellenarCuestionario',[CuestionarioController::class, 'Insertar']);
Route::post('/ActualizarCuestionario',[CuestionarioController::class, 'update']);
Route::post('/EliminarCuestionario/{id}',[CuestionarioController::class, 'destroy']);

/*----------------------------------------------------------------------------------*/
