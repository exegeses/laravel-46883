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

Route::view('/inicio', 'inicio');

#############################################
######### CRUD de marcas
use App\Http\Controllers\MarcaController;
Route::get('/adminMarcas', [ MarcaController::class, 'index' ] );

