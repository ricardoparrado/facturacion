@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Sucursal</h2>
    <form method="POST" action="{{ route('sucursales.update', $sucursal->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $sucursal->id }}">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $sucursal->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" class="form-control" value="{{ $sucursal->direccion }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $sucursal->telefono }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('sucursales.index') }}" class="btn btn-secondary">Volver al Listado</a>

    </form>
</div>
@endsection
