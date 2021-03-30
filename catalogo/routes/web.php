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

#############################################
######### CRUD de categorías
use App\Http\Controllers\CategoriaController;
Route::get('/adminCategorias', [ CategoriaController::class, 'index' ]);
Route::get('/agregarCategoria', [ CategoriaController::class, 'create' ] );
Route::post('/agregarCategoria', [ CategoriaController::class, 'store' ]);
Route::get('/modificarCategoria/{id}', [ CategoriaController::class, 'edit' ] );
Route::put('/modificarCategoria', [ CategoriaController::class, 'update' ]);

#############################################
######### CRUD de productos
use App\Http\Controllers\ProductoController;
Route::get( '/adminProductos', [ ProductoController::class, 'index' ] );
Route::get('/agregarProducto', [ ProductoController::class, 'create' ] );
