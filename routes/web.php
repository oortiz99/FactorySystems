<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\FactorySystemsController;
use App\Http\Controllers\web\FSPanelController;
use App\Http\Controllers\web\RecanvisController;
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


Route::match(['get','post'],'/',[FactorySystemsController::class,"index"]) -> name('index');
Route::post('/validarLogin', [FactorySystemsController::class, 'validarLogin'])-> name('validarLogin');
Route::get('/inici', [FSPanelController::class, 'inici'])-> name('inici');
Route::get('/visualitzar', [FSPanelController::class, 'visualitzar'])-> name('visualitzar');
Route::get('/historial', [FSPanelController::class, 'historial'])-> name('historial');
// Route::post('/registrar', [FSPanelController::class, 'registrarMaquina'])-> name('registrarMaquina');
Route::match(['get','post'],'/registrar',[FSPanelController::class,"registrarMaquina"]) -> name('registrarMaquina');
Route::get('/recanvis', [FSPanelController::class, 'recanvis'])-> name('recanvis');
Route::get('/demanar', [RecanvisController::class, 'demanar'])-> name('demanar');
