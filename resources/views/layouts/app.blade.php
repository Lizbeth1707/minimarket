<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minimarket')</title>

    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>
<body>

    <header>
        <h1>🏪 MINIMARKET</h1>

        <nav>
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('productos.index') }}">Productos</a>
            <a href="#">Categorías</a>
            <a href="#">Proveedores</a>
            <a href="#">Almacén</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Sistema de Gestión de Inventario · Cusco, Perú © 2026</p>
    </footer>

</body>
</html>