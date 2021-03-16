@extends('layouts.plantilla')

    @section('contenido')
        <h1>Baja de una región</h1>

        <div class="bg-light border-secondary col-6 mx-auto
                    shadow rounded p-4 text-danger">
            Se eliminará la región:
            <span class="lead">{{ $region->regNombre }}</span>
            <form action="/eliminarRegion" method="post">
                @csrf
                <input type="hidden" name="regNombre"
                       value="{{ $region->regNombre }}">
                <input type="hidden" name="regID"
                       value="{{ $region->regID }}">
                <button class="btn btn-danger btn-block my-3">
                    Confirmar baja
                </button>
                <a href="/adminRegiones" class="btn btn-outline-secondary btn-block">
                    Volver a panel
                </a>
            </form>
        </div>
        <script>
            Swal.fire(
                '¡Advertencia!',
                'Si pulsa el botón "Confirmar baja", se eliminará la región',
                'error'
            );
        </script>

    @endsection
