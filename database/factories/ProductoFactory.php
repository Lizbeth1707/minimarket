<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'categoria_id' => Categoria::factory(),
            'codigo_barras' => fake()->unique()->numerify('#############'),
            'nombre' => fake()->words(2, true),
            'descripcion' => fake()->sentence(),
            'precio' => fake()->randomFloat(2, 0.50, 100),
            'stock_actual' => fake()->numberBetween(0, 100),
            'stock_minimo' => fake()->numberBetween(5, 20),
            'activo' => true,
        ];
    }
}