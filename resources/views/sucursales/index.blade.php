@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Sucursales</h2>
        <!-- Formulario de búsqueda -->
        <form method="GET" action="{{ route('sucursales.index') }}">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nombre, dirección, teléfono...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </div>
            </div>
        </form>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sucursales as $sucursal)
            <tr>
                <td>{{ $sucursal->nombre }}</td>
                <td>{{ $sucursal->direccion }}</td>
                <td>{{ $sucursal->telefono }}</td>
                <td>
                    <a href="{{ route('sucursales.edit', $sucursal->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('sucursales.destroy', $sucursal->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="showConfirmation()">Eliminar</button>
                        <script src="{{ asset('js/confirm-delete.js') }}"></script>                     
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('sucursales.create') }}" class="btn btn-success">Crear Sucursal</a>
    <a href="{{ route('sucursales.index') }}" class="btn btn-primary">Listado Completo</a>
</div>
@endsection
