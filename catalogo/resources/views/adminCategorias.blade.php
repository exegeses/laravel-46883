@extends('layouts.plantilla')

    @section('contenido')

        <h1>Panel de administración de categorías</h1>

        @if ( session('mensaje') )
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoría</th>
                    <th colspan="2">
                        <a href="/agregarCategoria" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>#</td>
                    <td>categoria</td>
                    <td>
                        <a href="/modificarCategoria" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="/eliminarCategoria" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>


            </tbody>
        </table>


    @endsection
