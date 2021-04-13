<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de administración de marcas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-1">


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
                            @foreach( $marcas as $marca )
                                <tr>
                                    <td>{{ $marca->idMarca }}</td>
                                    <td>{{ $marca->mkNombre }}</td>
                                    <td>
                                        <a href="/modificarMarca/{{ $marca->idMarca }}" class="btn btn-outline-secondary">
                                            Modificar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/eliminarMarca/{{ $marca->idMarca }}" class="btn btn-outline-secondary">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>




                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
