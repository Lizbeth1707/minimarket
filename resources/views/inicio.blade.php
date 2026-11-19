@extends('layouts.app')

@section('title', 'Inicio - Minimarket')

@section('content')
    <h1>Sistema de Gestión de Inventario para un Minimarket</h1>

    <p>Administra tus productos, proveedores y movimientos de almacén.</p>

    <div class="tarjetas">
        <div class="tarjeta">
            <h2>📦 Gestión de Productos</h2>
            <p>Registra, consulta y actualiza los productos y sus categorías.</p>
            <strong>Rol: Administrador</strong>
        </div>

        <div class="tarjeta">
            <h2>🚚 Entradas y Salidas</h2>
            <p>Registra los ingresos, salidas y pérdidas de productos.</p>
            <strong>Rol: Encargado de Almacén</strong>
        </div>

        <div class="tarjeta">
            <h2>📊 Control de Inventario</h2>
            <p>Consulta el stock, las alertas y las fechas de vencimiento.</p>
            <strong>Rol: Administrador</strong>
        </div>
    </div>
@endsection