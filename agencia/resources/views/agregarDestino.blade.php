@extends('layouts.plantilla')
    @section('contenido')

        <h1>Alta de un nuevo destino</h1>

        <div class="bg-light border-secondary col-8 mx-auto shadow rounded p-4">

        <form action="/agregarDestino" method="post">
        @csrf
            Nombre: <br>
            <input type="text" name="destNombre" class="form-control" required>
            <br>
            Región: <br>
            <select name="regID" class="form-control" required>
                <option value="">Seleccione una región</option>
    @foreach( $regiones as $region )
                <option value="{{ $region->regID }}">{{ $region->regNombre }}</option>
    @endforeach
            </select>
            <br>
            Precio: <br>
            <input type="number" name="destPrecio" class="form-control" required>
            <br>
            Asientos Totales: <br>
            <input type="number" name="destAsientos" class="form-control" required>
            <br>
            Asientos Disponibles: <br>
            <input type="number" name="destDisponibles" class="form-control" required>
            <br>
            <button class="btn btn-dark">Agregar</button>
            <a href="/adminDestinos" class="btn btn-outline-secondary ml-3">
                 Volver a panel
            </a>
        </form>

        </div>

    @endsection

