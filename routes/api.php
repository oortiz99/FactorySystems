<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ErrorsController;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\MaquinesController;
use App\Http\Controllers\api\FactorySystemsAPIController;
use App\Http\Controllers\api\RecanvisController;
use App\Http\Controllers\api\HistorialController;

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
// Route::get('/login', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'login']);
Route::match(['get','post'],'/login',[LoginController::class,"login"]) -> name('login');
Route::middleware('auth:sanctum')->get('/logout', [LoginController::class, 'logout'])-> name('logout');
// Route::middleware('auth:sanctum')->get('getTreballadors/', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'getTreballadors']);
// Route::middleware('auth:sanctum')->get('/getMaquinas', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'getMaquinas']);
Route::get('/getTreballadors', [FactorySystemsAPIController::class, 'getTreballadors']);
Route::get('/getMaquinas', [FactorySystemsAPIController::class, 'getMaquinas']);
Route::get('/getMaquinesPerPlanta', [MaquinesController::class, 'getMaquinesPerPlanta'])->name('getMaquinesPerPlanta');
// Route::middleware('auth:sanctum')->get('/getErrors', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'getErrors']);
Route::get('/getErrors', [FactorySystemsAPIController::class, 'getErrors']);
// Route::get('/reportarError', [ErrorsController::class, 'reportarError']);
Route::match(['get','post'],'/reportarError',[ErrorsController::class,"reportarError"]) -> name('reportarError');
Route::match(['get','post'],'/registrarMaquina',[MaquinesController::class,"registrarMaquina"]) -> name('registrarMaquina');
Route::put('/canviarEstat', [ErrorsController::class, 'canviarEstat'])->name('canviarEstat');
Route::get('/getRecanvis', [RecanvisController::class, 'getRecanvis'])->name('getRecanvis');
Route::get('/buscarRecanvi', [RecanvisController::class, 'buscarRecanvi'])->name('buscarRecanvi');
Route::get('/getHistorialErrors', [HistorialController::class, 'getHistorialErrors'])->name('getHistorialErrors');

