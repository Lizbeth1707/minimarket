@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')

<h2>Editar producto</h2>

@if ($errors->any())
    <div>
        <strong>Corrige los siguientes errores:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('productos.update', $producto) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Categoría:</label>
    <select name="categoria_id" required>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}"
                {{ old('categoria_id', $producto->categoria_id) == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Código de barras:</label>
    <input type="text" name="codigo_barras"
           value="{{ old('codigo_barras', $producto->codigo_barras) }}"
           maxlength="50" required>

    <br><br>

    <label>Nombre:</label>
    <input type="text" name="nombre"
           value="{{ old('nombre', $producto->nombre) }}"
           maxlength="120" required>

    <br><br>

    <label>Descripción:</label>
    <textarea name="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>

    <br><br>

    <label>Precio (S/):</label>
    <input type="number" name="precio" step="0.01" min="0"
           value="{{ old('precio', $producto->precio) }}" required>

    <br><br>

    <label>Stock actual:</label>
    <input type="number" name="stock_actual" min="0"
           value="{{ old('stock_actual', $producto->stock_actual) }}" required>

    <br><br>

    <label>Stock mínimo:</label>
    <input type="number" name="stock_minimo" min="0"
           value="{{ old('stock_minimo', $producto->stock_minimo) }}" required>

    <br><br>

    <label>Estado:</label>
    <select name="activo" required>
        <option value="1" {{ old('activo', $producto->activo) == '1' ? 'selected' : '' }}>Activo</option>
        <option value="0" {{ old('activo', $producto->activo) == '0' ? 'selected' : '' }}>Inactivo</option>
    </select>

    <br><br>

    <button type="submit">Actualizar producto</button>

    <a href="{{ route('productos.index') }}">Cancelar</a>
</form>

@endsection