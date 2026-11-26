@extends('layouts.app')

@section('title', 'Detalle del producto')

@section('content')

<h2>Detalle del producto</h2>

<h3>Información general</h3>

<p><strong>Código de barras:</strong> {{ $producto->codigo_barras }}</p>

<p><strong>Nombre:</strong> {{ $producto->nombre }}</p>

<p><strong>Categoría:</strong> {{ $producto->categoria->nombre ?? 'Sin categoría' }}</p>

<p><strong>Descripción:</strong> {{ $producto->descripcion ?? 'Sin descripción' }}</p>

<p><strong>Precio:</strong> S/ {{ number_format($producto->precio, 2) }}</p>

<p><strong>Stock actual:</strong> {{ $producto->stock_actual }}</p>

<p><strong>Stock mínimo:</strong> {{ $producto->stock_minimo }}</p>

<p><strong>Estado:</strong> {{ $producto->activo ? 'Activo' : 'Inactivo' }}</p>

<hr>

<h3>Movimientos de inventario (Kardex)</h3>

<table border="1" cellpadding="10" cellspacing="0">

    <thead>
        <tr>
            <th>Fecha</th>
            <th>Tipo de movimiento</th>
            <th>Cantidad</th>
        </tr>
    </thead>

    <tbody>
        @forelse($producto->movimientos as $movimiento)
            <tr>
                <td>{{ $movimiento->created_at?->format('d/m/Y H:i') }}</td>
                <td>{{ $movimiento->tipo ?? 'Movimiento' }}</td>
                <td>{{ $movimiento->cantidad ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Este producto todavía no tiene movimientos registrados.</td>
            </tr>
        @endforelse
    </tbody>

</table>

<br>

<a href="{{ route('productos.index') }}">Volver a productos</a>

<a href="{{ route('productos.edit', $producto) }}">Editar producto</a>

@endsection