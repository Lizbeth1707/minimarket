<?php

namespace Database\Factories;

use App\Models\MovimientoInventario;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MovimientoInventario>
 */
class MovimientoInventarioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'producto_id' => Producto::factory(),
            'user_id' => User::factory(),
            'tipo' => fake()->randomElement([
                'entrada',
                'salida',
                'merma',
            ]),
            'cantidad' => fake()->numberBetween(1, 100),
            'fecha_movimiento' => fake()->date(),
            'referencia' => fake()->optional()->bothify('MOV-####'),
            'observacion' => fake()->optional()->sentence(),
        ];
    }
}