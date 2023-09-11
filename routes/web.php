<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TipoRecaudoController;
use App\Http\Controllers\FormaPagoController;
use App\Http\Controllers\FacturaProveedorController;
use App\Http\Controllers\RecaudoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tipo_usuarios', TipoUsuarioController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('sucursales', SucursalController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('tipo_recaudos', TipoRecaudoController::class);
Route::resource('forma_pagos', FormaPagoController::class);
Route::resource('factura_proveedores', FacturaProveedorController::class);
Route::resource('recaudos', RecaudoController::class);
