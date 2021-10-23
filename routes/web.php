<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('', App\Http\Controllers\GeneralController::class);

// CRUD normal
Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('login', App\Http\Controllers\HomeController::class);
Route::resource('almacen', App\Http\Controllers\AlmacenController::class);
Route::resource('proveedors', App\Http\Controllers\ProveedorController::class);
Route::resource('incidencia', App\Http\Controllers\IncidenciaController::class);
Route::resource('operaciones', App\Http\Controllers\OperacionesController::class);
Route::resource('logistica', App\Http\Controllers\LogisticaController::class);

// CRUD - Cotización
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::resource('expiras', App\Http\Controllers\ExpiraController::class);
Route::resource('monedas', App\Http\Controllers\MonedaController::class);
Route::resource('tiempoentregas', App\Http\Controllers\TiempoentregaController::class);
Route::resource('piepaginas', App\Http\Controllers\PiepaginaController::class);
Route::resource('condicions', App\Http\Controllers\CondicionController::class);
Route::resource('formapagos', App\Http\Controllers\FormapagoController::class);
Route::resource('cotis', App\Http\Controllers\CotiController::class);
Route::resource('areas', App\Http\Controllers\AreaController::class);
Route::resource('estadoclientes', App\Http\Controllers\EstadoclienteController::class);

Auth::routes();
