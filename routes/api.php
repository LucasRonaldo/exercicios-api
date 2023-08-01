<?php
use App\Http\Controllers\ExercicioUmController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioSeisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioNoveController;
use App\Http\Controllers\ExercicioDezController;
use App\Http\Controllers\ExercicioDozeController;
use App\Http\Controllers\ExercicioOnzeController;
use App\Http\Controllers\ExercicioTrezeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::post('exercicio/tres', 
[ExercicioTresController::class, 'media']);

Route::post('exercicio/quatro', 
[ExercicioQuatroController::class, 'verificador']);

Route::get('exercicio/cinco', 
[ExercicioCincoController::class, 'divisivelporquatro']);

Route::post('exercicio/seis', 
[ExercicioSeisController::class, 'idade']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/oito', 
[ExercicioOitoController::class, 'exibirTabuada']);

Route::post('exercicio/nove', 
[ExercicioNoveController::class, 'divisivelPeloUsuario']);

Route::get('exercicio/dez', 
[ExercicioDezController::class, 'impares']);


Route::post('exercicio/onze', 
[ExercicioOnzeController::class, 'calculadora']);   

Route::get('exercicio/doze', 
[ExercicioDozeController::class, 'exibirNumerosDecrescente']);

Route::get('exercicio/treze', 
[ExercicioTrezeController::class, 'divisivelPorCinco']);







