@extends('layouts.app')

@section('title', 'Registrar producto')

@section('content')

<h2>Registrar nuevo producto</h2>

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

<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <label>Categoría:</label>
    <select name="categoria_id" required>
        <option value="">Seleccionar categoría</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}"
                {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Código de barras:</label>
    <input type="text" name="codigo_barras"
           value="{{ old('codigo_barras') }}" maxlength="50" required>

    <br><br>

    <label>Nombre:</label>
    <input type="text" name="nombre"
           value="{{ old('nombre') }}" maxlength="120" required>

    <br><br>

    <label>Descripción:</label>
    <textarea name="descripcion">{{ old('descripcion') }}</textarea>

    <br><br>

    <label>Precio (S/):</label>
    <input type="number" name="precio" step="0.01" min="0"
           value="{{ old('precio') }}" required>

    <br><br>

    <label>Stock actual:</label>
    <input type="number" name="stock_actual" min="0"
           value="{{ old('stock_actual', 0) }}" required>

    <br><br>

    <label>Stock mínimo:</label>
    <input type="number" name="stock_minimo" min="0"
           value="{{ old('stock_minimo') }}" required>

    <br><br>

    <label>Estado:</label>
    <select name="activo" required>
        <option value="1" {{ old('activo', '1') == '1' ? 'selected' : '' }}>Activo</option>
        <option value="0" {{ old('activo') === '0' ? 'selected' : '' }}>Inactivo</option>
    </select>

    <br><br>

    <button type="submit">Guardar producto</button>

    <a href="{{ route('productos.index') }}">Cancelar</a>
</form>

@endsection