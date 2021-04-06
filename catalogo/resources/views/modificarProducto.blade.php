@extends('layouts.plantilla')

@section('contenido')


        <h1>Modificación de un producto</h1>

        <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

            <form action="/modificarProducto" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                Nombre: <br>
                <input type="text" name="prdNombre"
                       value="{{ old('prdNombre', $Producto->prdNombre) }}"
                       class="form-control">
                <br>
                Precio: <br>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="prdPrecio"
                           value="{{ old('prdPrecio', $Producto->prdPrecio) }}"
                           class="form-control">
                </div>
                <br>
                Marca: <br>
                <select name="idMarca" class="form-control" required>
                    <option value="">Seleccione una marca</option>
           @foreach( $marcas as $marca )
                    <option {{ ($Producto->idMarca == $marca->idMarca)?'selected':'' }} value="{{ $marca->idMarca }}">{{ $marca->mkNombre }}</option>
           @endforeach
                </select>
                <br>
                Categoría: <br>
                <select name="idCategoria" class="form-control" required>
                    <option value="">Seleccione una Categoría</option>
           @foreach( $categorias as $categoria )
                    <option {{ ($Producto->idCategoria == $categoria->idCategoria)?'selected':'' }} value="{{ $categoria->idCategoria }}">{{ $categoria->catNombre }}</option>
           @endforeach
                </select>
                <br>
                Presentacion: <br>
                <textarea name="prdPresentacion"
                          class="form-control">{{ old('prdPresentacion', $Producto->prdPresentacion) }}</textarea>
                <br>
                Stock: <br>
                <input type="number" name="prdStock"
                       value="{{ old('prdStock', $Producto->prdStock) }}"
                       class="form-control" min="0">
                <br>
                Imagen actual: <br>
                <img src="/productos/{{ $Producto->prdImagen }}" class="img-thumbnail my-2">
                <br>
                Imagen nueva (opcional): <br>
                <br>
                <div class="custom-file mt-1 mb-4">
                    <input type="file" name="prdImagen"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco">Seleccionar Archivo: </label>
                </div>

                <input type="hidden" name="idProducto"
                       value="{{ $Producto->idProducto }}">
                <br>
                <button class="btn btn-dark mb-3">Modificar Producto</button>
                <a href="/adminProductos" class="btn btn-outline-secondary mb-3">
                    Volver al panel de productos
                </a>
            </form>

        </div>

        @if( $errors->any() )
            <div class="alert alert-danger col-8 mx-auto p-2">
                <ul>
                    @foreach( $errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

   @endsection

