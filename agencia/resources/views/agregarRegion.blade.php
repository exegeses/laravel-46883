@extends('layouts.plantilla')

    @section('contenido')

        <h1>Alta de una región</h1>

        <div class="bg-light border-secondary col-8 mx-auto shadow rounded p-4">

            <form action="" method="">
                
                Región: <br>
                <input type="text" name="regNombre" class="form-control">
                <br>
                <button class="btn btn-dark">Agregar</button>
                <a href="/adminRegiones" class="btn btn-outline-secondary ml-3">
                    Volver a panel
                </a>
            </form>

        </div>

    @endsection
