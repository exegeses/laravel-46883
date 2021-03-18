@extends('layouts.plantilla')
@section('contenido')
    <h1>Panel de administración de destinos</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <table class="table table-borderless table-striped table-hover">
        <thead>
        <tr>
            <th>Destino (aeropuerto)</th>
            <th>Región</th>
            <th>Precio</th>
            <th colspan="2">
                <a href="/agregarDestino" class="btn btn-outline-secondary">
                    Agregar
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
@foreach( $destinos as $destino )
            <tr>
                <td> {{ $destino->destNombre }} </td>
                <td> {{ $destino->regNombre }} </td>
                <td> ${{ $destino->destPrecio }} </td>
                <td>
                    <a href="/modificarDestino/{{ $destino->destID }}" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="/eliminarDestino/{{ $destino->destID }}" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
@endsection
