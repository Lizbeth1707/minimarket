
## Datos de prueba

### Usuarios

| Rol | Correo | Contraseña |
|---|---|---|
| Administrador | admin@minimarket.test | password |
| Encargado de Almacén | almacen@minimarket.test | password |

### Datos registrados

- 8 categorías de productos.
- 2 proveedores de prueba.
- 14 productos registrados actualmente.

### Funcionalidades implementadas

- Registro de productos.
- Listado y visualización de productos.
- Edición de productos.
- Búsqueda por nombre y código de barras.
- Filtros por categoría y estado.
- Paginación de productos.
- Activación y desactivación de productos.
- Validación de códigos de barras duplicados.
- Validación de precios mayores que cero.
- Visualización del Kardex de cada producto.

### Reglas verificadas

- RN01: código de barras único.
- Clave foránea entre productos y categorías.
- Validación de categoría existente.
- RN03: precio mayor que cero.
- Stock actual no negativo.
- Stock mínimo mayor que cero.

### Pruebas realizadas

- Listado de productos: OK.
- Filtros por estado: OK.
- Búsqueda por nombre: OK.
- Validación de precio cero: OK.
- Validación de código duplicado: OK.
- Visualización de detalles: OK.
- Visualización del Kardex: OK.

### Funcionalidades pendientes

- Registro automático de movimientos de inventario.
- Control de salidas mayores al stock disponible.
- Prevención de stock negativo durante los movimientos.
- Validación de vencimiento de productos perecibles.
- Bloqueo de salidas de productos vencidos.
- Registro automático de movimientos en el Kardex.
