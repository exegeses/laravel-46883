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
Route::post('/agregarRegion', function ()
{
    //capturamos datos enviados por el form
    $regNombre = $_POST['regNombre'];
    //dar alta
    /*
    DB::insert(
            'INSERT INTO regiones
                        ( regNombre )
                   VALUES
                        ( :regNombre )',
                   [ $regNombre ]
            );
    */
    DB::table('regiones')->insert([ 'regNombre'=>$regNombre ]);
    //redireccionar con un mensaje
    return redirect('/adminRegiones')
                ->with('mensaje', 'Región: '.$regNombre.' agregada correctamente');
});
Route::get('/modificarRegion/{id}', function($id)
{
    //obtenemos datos de región por su id
    $region = DB::table('regiones')
                        ->where('regID', $id)
                        ->first();
    //retornamos vista del form pasando los datos
    return view('modificarRegion',
                    [ 'region'=>$region ]
                );
});
Route::post('/modificarRegion', function ()
{
    //capturamos datos enviados por el form
    $regID = $_POST['regID'];
    $regNombre = $_POST['regNombre'];
    //modificamos
    /*
     DB::update('UPDATE regiones
                    SET regNombre = ?
                   WHERE regID = ?',
                [ $regNombre, $regID ]);
    */
    DB::table('regiones')
                ->where('regID', $regID)
                ->update( [ 'regNombre'=>$regNombre ] );
    //redirección con mensaje
    return redirect('/adminRegiones')
                ->with('mensaje', 'Región: '.$regNombre.' modificada correctamente');
});
Route::get('/eliminarRegion/{id}', function ($id)
{
    //obtenemos datos de la región a eliminar
    $region = DB::table('regiones')
                    ->where('regID', $id)
                    ->first();
    //retornamos vista de confirmacion pasando datos
    return view('eliminarRegion',
                    [ 'region'=>$region ]
            );
});
Route::post('/eliminarRegion', function ()
{
    //capturamos datos en viados por el form
    $regNombre = $_POST['regNombre'];
    $regID = $_POST['regID'];
    //borramos la región
    /*
    DB::delete('DELETE FROM regiones
                    WHERE regID = :regID',
                    [ $regID ]
              );
    */
    DB::table('regiones')
                ->where('regID', $regID)
                ->delete();
    //redirección con mensaje de confirmación
    return redirect('/adminRegiones')
        ->with('mensaje', 'Región: '.$regNombre.' eliminada correctamente');

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
Route::get('/agregarDestino', function ()
{
    //obtenemos listado de regiones
    $regiones = DB::table('regiones')->get();
    // retornamos vista pasando listado
    return view('agregarDestino', [ 'regiones'=>$regiones ] );
});
Route::post('/agregarDestino', function ()
{
    //capturamos datos enviados por el form
    $destNombre = $_POST['destNombre'];
    $regID = $_POST['regID'];
    $destPrecio = $_POST['destPrecio'];
    $destAsientos = $_POST['destAsientos'];
    $destDisponibles = $_POST['destDisponibles'];
    //insertar datos
    DB::table('destinos')->insert(
        [ 'destNombre'=>$destNombre,
            'regID'=>$regID,
            'destPrecio'=>$destPrecio,
            'destAsientos'=>$destAsientos,
            'destDisponibles'=>$destDisponibles
        ]
    );
    //redirección a admin + mensaje ok
    return redirect('/adminDestinos')
                ->with([ 'mensaje'=>'Destino: '.$destNombre.' agregado correctamente' ]);
});
Route::get('/modificarDestino/{id}', function ($id)
{
    //obtenemos datos de un destino por si id
    $destino = DB::table('destinos as d')
                    ->join( 'regiones as r', 'd.regID', '=', 'r.regID' )
                    ->where('destID', $id)
                    ->first();
    //obtenemos listado de regiones
    $regiones = DB::table('regiones')->get();
    //retornamos vista
    return view('modificarDestino',
                    [
                        'destino'=>$destino,
                        'regiones'=>$regiones
                    ]
                );
});
