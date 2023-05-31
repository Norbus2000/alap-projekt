<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tesztek', [TesztController::class, 'index']);
Route::get('/tesztek/kategoria/{id}', [TesztController::class, 'tesztKategoria']);
Route::get('/kategoria', [KategoriaController::class, 'index']);
