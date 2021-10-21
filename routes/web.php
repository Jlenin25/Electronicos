<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('', App\Http\Controllers\GeneralController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
// Route::resource('users', App\Http\Controllers\UserController::class)->names('users.edit');
Route::resource('roles', App\Http\Controllers\RoleController::class)->names('roles');
Route::resource('login', App\Http\Controllers\HomeController::class);
Route::get('contactanos', [App\Http\Controllers\GeneralController::class, 'contact']);
Route::get('tienda', [App\Http\Controllers\GeneralController::class, 'store']);
Route::get('carrito', [App\Http\Controllers\GeneralController::class, 'checkout']);
Route::get('index', [App\Http\Controllers\HomeController::class, 'indexprincipal']);
Route::resource('almacen', App\Http\Controllers\AlmacenController::class);
Route::resource('proveedor', App\Http\Controllers\ProveedorController::class);
Route::resource('incidencia', App\Http\Controllers\IncidenciaController::class);
Route::resource('operaciones', App\Http\Controllers\OperacionesController::class);
Route::resource('logistica', App\Http\Controllers\LogisticaController::class);
Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class)->names('roles');
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
// CRUD
Route::resource('asignados', App\Http\Controllers\AsignadoController::class);
Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::resource('expiras', App\Http\Controllers\ExpiraController::class);
Route::resource('monedas', App\Http\Controllers\MonedaController::class);
Route::resource('tiempoentregas', App\Http\Controllers\TiempoentregaController::class);
Route::resource('direccions', App\Http\Controllers\DireccionController::class);
Route::resource('piepaginas', App\Http\Controllers\PiepaginaController::class);
Route::resource('condicions', App\Http\Controllers\CondicionController::class);
Route::resource('cotis', App\Http\Controllers\CotiController::class);
Route::resource('formapagos', App\Http\Controllers\FormapagoController::class);


Auth::routes();
