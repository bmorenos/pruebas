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

Route::get('/', function () {
    return view('home');

});

Route::get('/pruebas',[\App\Http\Controllers\PruebasController::class, 'index'])->name('pruebas.index');
Route::get('/pruebas/create',[\App\Http\Controllers\PruebasController::class, 'create'])->name('pruebas.create');
Route::post('/pruebas',[\App\Http\Controllers\PruebasController::class, 'store'])->name('pruebas.store');
Route::get('/pruebas/{prueba}/edit',[\App\Http\Controllers\PruebasController::class, 'edit'])->name('pruebas.edit');
Route::patch('/pruebas/{prueba}',[\App\Http\Controllers\PruebasController::class, 'update'])->name('pruebas.update');
Route::delete('/pruebas/{prueba}',[\App\Http\Controllers\PruebasController::class, 'destroy'])->name('pruebas.destroy');
