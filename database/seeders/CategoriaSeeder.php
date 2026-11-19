<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            'Abarrotes',
            'Bebidas',
            'Lácteos',
            'Limpieza',
            'Snacks',
            'Cuidado personal',
            'Enlatados',
            'Frutas y verduras',
        ];

        foreach ($categorias as $nombre) {
            Categoria::firstOrCreate([
                'nombre' => $nombre,
            ]);
        }
    }
}