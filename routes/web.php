<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Ruta de módulo categorías
Route::resource('categoria', App\Http\Controllers\CategoriumController::class)->middleware('auth');
// Ruta de módulo inventario
Route::resource('inventario', App\Http\Controllers\InventarioController::class)->middleware('auth');
// Ruta de módulo productos
Route::resource('producto', App\Http\Controllers\ProductoController::class)->middleware('auth');
// Ruta de módulo ventas
Route::resource('ventas', App\Http\Controllers\ventaController::class)->middleware('auth');
// Ruta al inicio
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta de buscador en tiempo real
//Route::get('categoria/buscador', 'CategoriumController@buscador');
