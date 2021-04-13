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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

use App\Http\Controllers\MarcaController;
Route::middleware(['auth:sanctum', 'verified'])
            ->get('/adminMarcas', [ MarcaController::class, 'index' ] )
            ->name('adminMarcas');

Route::middleware(['auth:sanctum', 'verified'])
            ->get('/agregarMarca', [ MarcaController::class, 'create' ]);
Route::middleware(['auth:sanctum', 'verified'])
            ->post('/agregarMarca', [ MarcaController::class, 'store' ] );

Route::middleware(['auth:sanctum', 'verified'])->get('/adminCategorias', function () {
    return view('adminCategorias');
})->name('adminCategorias');
