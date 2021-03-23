@extends('layouts.plantilla')

    @section('contenido')

        <h1>Panel de administración de marcas</h1>

        @if ( session('mensaje') )
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="/agregarMarca" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
    
                <tr>
                    <td>{{ 'idMarca' }}</td>
                    <td>{{ 'mkNombre' }}</td>
                    <td>
                        <a href="/modificarMarca" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="/eliminarMarca" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
    
            </tbody>
        </table>


    @endsection
