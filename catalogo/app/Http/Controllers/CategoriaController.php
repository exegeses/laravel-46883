<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(7);
        return view('adminCategorias',
                     [ 'categorias'=>$categorias ]
                    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarCategoria');
    }

    private function validarCategoria(Request $request)
    {
        $request->validate(
            [
                'catNombre'=>'required|min:2|max:30'
            ],
            [
                'catNombre.required'=>'El campo "Nombre de la categoría" es obligatorio.',
                'catNombre.min'=>'El campo "Nombre de la categoría" debe tener al menos 2 caractéres.',
                'catNombre.max'=>'El campo "Nombre de la categoría" debe tener 30 caractéres como máximo.'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catNombre = $request->catNombre;
        //validación
        $this->validarCategoria($request);
        // instanciamos, asignamos valores y guardar
        $Categoria = new Categoria;
        $Categoria->catNombre = $catNombre;
        $Categoria->save();
        //retornar petición + mensaje
        return redirect('/adminCategorias')
            ->with(
                [
                    'mensaje'=>'Categoría: '.$catNombre.' agregada correctamente'
                ]
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Categoria = Categoria::find($id);
        //retornamos a la vista pasando datos
        return view('modificarCategoria',
            [
                'Categoria'=>$Categoria
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $catNombre = $request->catNombre;
        //validamos
        $this->validarCategoria($request);
        //obtenemos datos de la categoría
        $Categoria = Categoria::find($request->idCategoria);
        //asignamos
        $Categoria->catNombre = $catNombre;
        //guardamos
        $Categoria->save();
        //retornamos a redirección con mensaje
        return redirect('/adminCategorias')
            ->with(
                [
                    'mensaje'=>'Categoría: '.$catNombre.' modificada correctamente'
                ]
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
