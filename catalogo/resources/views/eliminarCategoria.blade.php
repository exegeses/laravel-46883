@extends('layouts.plantilla')

    @section('contenido')

        <h1>Baja de una categoria</h1>

        <div class="row alert bg-light border-danger col-8 mx-auto p-2">
            <div class="col text-danger align-self-center">
            @if ( $productos > 0 )
                    No se puede eliminar la categoria: {{ $Categoria->catNombre }}.
                    Ya que tiene productos utilizándola.
                    <a href="/adminCategorias"> Volver a panel</a>
            @else
                <form action="/eliminarCategoria" method="post">
                    @csrf
                    @method('delete')
                    <h2>{{ $Categoria->catNombre }}</h2>
                    <input type="hidden" name="idCategoria"
                        value="{{ $Categoria->idCategoria}}">
                    <input type="hidden" name="catNombre"
                        value="{{ $Categoria->catNombre}}">
                    <button class="btn btn-danger btn-block my-3">Confirmar baja</button>
                    <a href="/adminCategorias" class="btn btn-outline-secondary btn-block">
                        Volver a panel
                    </a>

                </form>
            @endif
            </div>

            <script>
               /*
                Swal.fire(
                    'Advertencia',
                    'Si pulsa el boton "Confirmar baja", se eliminara el producto seleccionado',
                    'warning'
                )
               */
            </script>


    @endsection
