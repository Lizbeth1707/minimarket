# Sistema de Gestión de Inventario para un Minimarket

Proyecto integrador de DSI406 Tecnología Backend (Laravel + PostgreSQL).

## Requisitos

- PHP 8.3 o superior con pdo_pgsql
- Composer 2
- PostgreSQL
- Git

## Instalación

1. git clone https://github.com/Lizbeth1707/minimarket.git
2. cd minimarket
3. composer install
4. copy .env.example .env
5. Configurar la conexión a PostgreSQL en el archivo .env.
6. Crear la base de datos minimarket_db en PostgreSQL.
7. php artisan key:generate
8. php artisan migrate
9. php artisan serve

## Funcionalidades del proyecto

- Gestión de usuarios.
- Gestión de productos y categorías.
- Gestión de proveedores.
- Registro de entradas y salidas.
- Control automático del stock.
- Registro de mermas.
- Alertas de stock mínimo.
- Control de fechas de vencimiento.
- Historial de movimientos mediante Kardex.

## Autor

NADIA LIZBETH CRUZ CRUZ