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
use App\Models\Sucursal;




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


/*
|--------------------------------------------------------------------------
| Rutas aplicacion
|--------------------------------------------------------------------------
|
| Define las rutas de la aplicación utilizando Route::resource.
| Si deseas personalizar alguna ruta, agrégala después de esta sección.
|
*/

Route::resource('tipo_usuarios', TipoUsuarioController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('tipo_recaudos', TipoRecaudoController::class);
Route::resource('forma_pagos', FormaPagoController::class);
Route::resource('factura_proveedores', FacturaProveedorController::class);
Route::resource('recaudos', RecaudoController::class);

/*
|--------------------------------------------------------------------------
| Rutas sucursales
|--------------------------------------------------------------------------
|
| Define las rutas específicas de sucursales.
| Puedes personalizar las rutas adicionales después de esta sección.
|
*/

Route::get('/sucursales/{sucursal}/edit', [SucursalController::class, 'edit'])->name('sucursales.edit'); // Ruta para mostrar el formulario de edición de una sucursal
Route::put('/sucursales/{sucursal}', [SucursalController::class, 'update'])->name('sucursales.update'); // Ruta para actualizar una sucursal existente
Route::delete('/sucursales/{sucursal}', [SucursalController::class, 'destroy'])->name('sucursales.destroy'); // Ruta para eliminar una sucursal

// Define las rutas de CRUD para sucursales utilizando Route::resource
Route::resource('sucursales', SucursalController::class)->only(['index', 'create', 'store', 'show']);

// Puedes agregar rutas personalizadas adicionales aquí si es necesario
