@extends('layouts.plantilla')

    @section('contenido')

        <h1>Baja de un producto</h1>

        <div class="row alert bg-light border-danger col-8 mx-auto p-2">
            <div class="col">
                <img src="/productos/{{ $Producto->prdImagen }}" class="img-thumbnail">
            </div>
            <div class="col text-danger align-self-center">
            <form action="/eliminarProducto" method="post">
            @csrf
            @method('delete')
                <h2>{{ $Producto->prdNombre }}</h2>
                Categoría: {{ $Producto->relCategoria->catNombre }}  <br>
                Marca:  {{ $Producto->relMarca->mkNombre }} <br>
                Presentación: {{ $Producto->prdPresentacion }} <br>
                Precio: ${{ $Producto->prdPrecio }}

                <input type="hidden" name="idProducto"
                       value="{{ $Producto->idProducto}}">
                <input type="hidden" name="prdNombre"
                       value="{{ $Producto->prdNombre}}">
                <button class="btn btn-danger btn-block my-3">Confirmar baja</button>
                <a href="/adminProductos" class="btn btn-outline-secondary btn-block">
                    Volver a panel
                </a>

            </form>
            </div>
        </form>

            <script>
                Swal.fire(
                    'Advertencia',
                    'Si pulsa el botón "Confirmar baja", se eliminará el producto seleccionado.',
                    'warning'
                )
            </script>


    @endsection
