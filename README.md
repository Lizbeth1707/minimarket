## Datos de prueba

### Usuarios

| Rol | Correo | Contraseña |
|---|---|---|
| Administrador | admin@minimarket.test | password |
| Encargado de Almacén | almacen@minimarket.test | password |

### Datos registrados

- 8 categorías de productos.
- 2 proveedores de prueba.
- 5 productos de prueba.

### Reglas verificadas

- RN01: código de barras único.
- Clave foránea entre productos y categorías.

### Reglas pendientes de implementar

- RN03: precio mayor que cero.
- RN04: cantidades mayores que cero.
- RN05: impedir salidas mayores al stock.
- RN06: impedir stock negativo.
- RN09: validar vencimiento de productos perecibles.
- RN11: impedir salidas de productos vencidos.
- RN12: registrar movimientos automáticamente en el Kardex.