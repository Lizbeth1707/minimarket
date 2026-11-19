<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            [
                'categoria' => 'Abarrotes',
                'codigo_barras' => '7750000000001',
                'nombre' => 'Arroz Costeño 1kg',
                'descripcion' => 'Arroz embolsado de un kilogramo',
                'precio' => 4.50,
                'stock_minimo' => 10,
            ],
            [
                'categoria' => 'Bebidas',
                'codigo_barras' => '7750000000002',
                'nombre' => 'Agua mineral 625ml',
                'descripcion' => 'Botella de agua mineral',
                'precio' => 2.00,
                'stock_minimo' => 15,
            ],
            [
                'categoria' => 'Lácteos',
                'codigo_barras' => '7750000000003',
                'nombre' => 'Leche evaporada',
                'descripcion' => 'Lata de leche evaporada',
                'precio' => 4.20,
                'stock_minimo' => 10,
            ],
            [
                'categoria' => 'Limpieza',
                'codigo_barras' => '7750000000004',
                'nombre' => 'Detergente 1kg',
                'descripcion' => 'Detergente en polvo',
                'precio' => 8.50,
                'stock_minimo' => 5,
            ],
            [
                'categoria' => 'Snacks',
                'codigo_barras' => '7750000000005',
                'nombre' => 'Galletas de chocolate',
                'descripcion' => 'Paquete de galletas',
                'precio' => 2.50,
                'stock_minimo' => 10,
            ],
        ];

        foreach ($productos as $datos) {
            $categoria = Categoria::where('nombre', $datos['categoria'])
                ->firstOrFail();

            Producto::firstOrCreate(
                ['codigo_barras' => $datos['codigo_barras']],
                [
                    'categoria_id' => $categoria->id,
                    'nombre' => $datos['nombre'],
                    'descripcion' => $datos['descripcion'],
                    'precio' => $datos['precio'],
                    'stock_actual' => 0,
                    'stock_minimo' => $datos['stock_minimo'],
                    'activo' => true,
                ]
            );
        }
    }
}