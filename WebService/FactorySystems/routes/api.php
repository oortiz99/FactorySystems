<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('getTreballadors/', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'getTreballadors']);
Route::get('getMaquinas/', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'getMaquinas']);
Route::get('getMaquina/', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'getMaquinas']);
Route::get('getErrors/', [App\Http\Controllers\api\FactorySystemsAPIController::class, 'getErrors']);
