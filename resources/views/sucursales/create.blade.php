@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Sucursal</h2>
    <form action="{{ route('sucursales.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('sucursales.index') }}" class="btn btn-secondary">Volver al Listado</a>

    </form>
    
</div>
@endsection
