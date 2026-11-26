@extends('layouts.app')

@section('title', 'Lista de productos')

@section('content')

<h2>Gestión de productos</h2>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

<form action="{{ route('productos.index') }}" method="GET">
    <input
        type="text"
        name="buscar"
        placeholder="Buscar por nombre o código de barras"
        value="{{ request('buscar') }}"
    >

    <button type="submit">Buscar</button>
    <a href="{{ route('productos.index') }}">Limpiar</a>
</form>

<br>

<a href="{{ route('productos.create') }}">+ Registrar producto</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock actual</th>
            <th>Stock mínimo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @forelse($productos as $producto)
            <tr>
                <td>{{ $producto->codigo_barras }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                <td>S/ {{ number_format($producto->precio, 2) }}</td>
                <td>{{ $producto->stock_actual }}</td>
                <td>{{ $producto->stock_minimo }}</td>
                <td>{{ $producto->activo ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('productos.show', $producto) }}">Ver</a>
                    <a href="{{ route('productos.edit', $producto) }}">Editar</a>

                    <form action="{{ route('productos.destroy', $producto) }}"
                          method="POST"
                          onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No hay productos registrados.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>

{{ $productos->links() }}

@endsection