@extends('layouts.app')

@section('title', 'Detalle del producto')

@section('content')

<h2>Detalle del producto</h2>

<p><strong>Código de barras:</strong> {{ $producto->codigo_barras }}</p>

<p><strong>Nombre:</strong> {{ $producto->nombre }}</p>

<p><strong>Categoría:</strong> {{ $producto->categoria->nombre ?? 'Sin categoría' }}</p>

<p><strong>Descripción:</strong> {{ $producto->descripcion ?? 'Sin descripción' }}</p>

<p><strong>Precio:</strong> S/ {{ number_format($producto->precio, 2) }}</p>

<p><strong>Stock actual:</strong> {{ $producto->stock_actual }}</p>

<p><strong>Stock mínimo:</strong> {{ $producto->stock_minimo }}</p>

<p><strong>Estado:</strong> {{ $producto->activo ? 'Activo' : 'Inactivo' }}</p>

<br>

<a href="{{ route('productos.index') }}">Volver a productos</a>

<a href="{{ route('productos.edit', $producto) }}">Editar producto</a>

@endsection