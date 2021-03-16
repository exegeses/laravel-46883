@extends('layouts.plantilla')

    @section('contenido')

        <h1>Modificación de una región</h1>

        <div class="bg-light border-secondary col-8 mx-auto shadow rounded p-4">

            <form action="/modificarRegion" method="post">
            @csrf
                Región: <br>
                <input type="text" name="regNombre"
                       value="{{ $region->regNombre }}"
                       class="form-control">
                <input type="hidden" name="regID"
                       value="{{ $region->regID }}">
                <br>
                <button class="btn btn-dark">Modificar</button>
                <a href="/adminRegiones" class="btn btn-outline-secondary ml-3">
                    Volver a panel
                </a>
            </form>

        </div>

    @endsection
