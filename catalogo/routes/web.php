<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio', 'inicio');

#############################################
######### CRUD de marcas
use App\Http\Controllers\MarcaController;
Route::get('/adminMarcas', [ MarcaController::class, 'index' ] );
Route::get('/agregarMarca', [ MarcaController::class, 'create' ]);
Route::post('/agregarMarca', [ MarcaController::class, 'store' ] );
Route::get('/modificarMarca/{id}', [ MarcaController::class, 'edit' ]);
Route::put('/modificarMarca', [ MarcaController::class, 'update' ]);
Route::get('/eliminarMarca/{id}', [ MarcaController::class, 'confirmar' ] );
Route::delete('/eliminarMarca', [ MarcaController::class, 'destroy' ] );
#############################################
######### CRUD de categorías
use App\Http\Controllers\CategoriaController;
Route::get('/adminCategorias', [ CategoriaController::class, 'index' ]);
Route::get('/agregarCategoria', [ CategoriaController::class, 'create' ] );
Route::post('/agregarCategoria', [ CategoriaController::class, 'store' ]);
Route::get('/modificarCategoria/{id}', [ CategoriaController::class, 'edit' ] );
Route::put('/modificarCategoria', [ CategoriaController::class, 'update' ]);
Route::get('/eliminarCategoria/{id}', [ CategoriaController::class, 'confirmar' ] );
Route::delete('/eliminarCategoria', [ CategoriaController::class, 'destroy' ] );
#############################################
######### CRUD de productos
use App\Http\Controllers\ProductoController;
Route::get( '/adminProductos', [ ProductoController::class, 'index' ] );
Route::get('/agregarProducto', [ ProductoController::class, 'create' ] );
Route::post('/agregarProducto', [ ProductoController::class, 'store' ] );
Route::get('/modificarProducto/{id}', [ ProductoController::class, 'edit' ]);
Route::put('/modificarProducto', [ ProductoController::class, 'update' ] );
Route::get('/eliminarProducto/{id}', [ ProductoController::class, 'confirmar' ] );
Route::delete('/eliminarProducto', [ ProductoController::class, 'destroy' ] );
