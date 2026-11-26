
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
- Edición y eliminación de productos.
- Búsqueda por nombre y código de barras.
- Paginación de productos.
- Validación de códigos de barras duplicados.
- Protección para impedir eliminar productos con movimientos registrados.

### Reglas verificadas

- RN01: código de barras único.
- Clave foránea entre productos y categorías.
- Validación de categoría existente.
- No permitir eliminar productos que tengan movimientos registrados.

### Pruebas realizadas

- Registro de productos: OK.
- Validación de código duplicado: OK.
- Edición de productos: OK.
- Visualización de detalles: OK.
- Búsqueda por nombre: OK.
- Búsqueda por código de barras: OK.
- Paginación: OK.
- Eliminación de productos sin movimientos: OK.
- Bloqueo de eliminación de productos con movimientos: OK.

### Reglas pendientes de implementar

- RN03: precio mayor que cero.
- RN04: cantidades mayores que cero.
- RN05: impedir salidas mayores al stock.
- RN06: impedir stock negativo.
- RN09: validar vencimiento de productos perecibles.
- RN11: impedir salidas de productos vencidos.
- RN12: registrar movimientos automáticamente en el Kardex.
