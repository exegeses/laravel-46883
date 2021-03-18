@extends('layouts.plantilla')
    @section('contenido')

        <h1>Modificación de un destino</h1>

        <div class="bg-light border-secondary col-8 mx-auto shadow rounded p-4">

        <form action="/modificarDestino" method="post">
        @csrf
            Nombre: <br>
            <input type="text" name="destNombre"
                   value="{{ $destino->destNombre }}"
                   class="form-control" required>
            <br>
            Región: <br>
            <select name="regID" class="form-control" required>
                <option value="">Seleccione una región</option>
    @foreach( $regiones as $region )

                <option
                @if ( $destino->regID == $region->regID )
                    selected
                @endif
                    value="{{ $region->regID }}">{{ $region->regNombre }}</option>

    @endforeach
            </select>
            <br>
            Precio: <br>
            <input type="number" name="destPrecio"
                   value="{{ $destino->destPrecio }}"
                   class="form-control" required>
            <br>
            Asientos Totales: <br>
            <input type="number" name="destAsientos"
                   value="{{ $destino->destAsientos }}"
                   class="form-control" required>
            <br>
            Asientos Disponibles: <br>
            <input type="number" name="destDisponibles"
                   value="{{ $destino->destDisponibles }}"
                   class="form-control" required>
            <br>
            <input type="hidden" name="destID"
                   value="{{ $destino->destID }}">
            <button class="btn btn-dark">Modificar</button>
            <a href="/adminDestinos" class="btn btn-outline-secondary ml-3">
                 Volver a panel
            </a>
        </form>

        </div>

    @endsection

