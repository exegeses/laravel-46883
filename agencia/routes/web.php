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
# Route::get( 'peticion', acción );
Route::get('/saludo', function (){
    return 'buen día marcos';
} );
Route::get('/uno', function (){
    return view('primera');
});
Route::get('/dos', function (){
    // crearemos datos a pasar a una vista
    $limite = 15;

    // retornamos vista pasandoe datos
    return view('segunda',
                [
                    'nombre'=>'marcos',
                    'limite'=>$limite
                ]
            );
});
Route::get('/formulario', function (){
    return view('formulario');
});
Route::post('/procesa', function (){
    $nombre = $_POST['nombre'];
    return view('procesa',
                    [ 'nombre'=>$nombre ]
            );
});
######## Plantillas
Route::get('/inicio', function ()
{
    return view('inicio');
});

######################################
####### CRUD de regiones
Route::get('/adminRegiones', function ()
{
    /*
    $regiones = DB::select('
                        SELECT regID, regNombre
                            FROM regiones
                        ');
    */
    $regiones = DB::table('regiones')
                        ->get();
    return view('adminRegiones',
                    [ 'regiones'=>$regiones ]
            );
});
Route::get('/agregarRegion', function ()
{
    return view('agregarRegion');
});

######################################
####### CRUD de destinos
Route::get('/adminDestinos', function()
{
    /*
    $destinos = DB::select(
                    'SELECT destID, destNombre,
                            r.regNombre, destPrecio
	                    FROM destinos d
                        INNER JOIN regiones r
                        ON r.regID = d.regID'
                    );
    */
    $destinos = DB::table('destinos as d')
                        ->join('regiones as r', 'r.regID', '=', 'd.regID')
                        ->get();
    return view('adminDestinos',
                        [ 'destinos'=>$destinos ]
                );
});
