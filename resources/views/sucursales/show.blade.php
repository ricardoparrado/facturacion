@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de la Sucursal</h2>
    <p><strong>Nombre:</strong> {{ $sucursal->nombre }}</p>
    <p><strong>Dirección:</strong> {{ $sucursal->direccion }}</p>
    <p><strong>Teléfono:</strong> {{ $sucursal->telefono }}</p>
    <a href="{{ route('sucursales.index') }}" class="btn btn-primary">Volver al Listado</a>
</div>
@endsection
