<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Salida;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Salida>
 */
class SalidaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'producto_id' => Producto::factory(),
            'user_id' => User::factory(),
            'cantidad' => fake()->numberBetween(1, 20),
            'fecha_salida' => fake()->date(),
            'motivo' => fake()->randomElement([
                'Consumo interno',
                'Traslado de almacén',
                'Devolución',
                'Otro',
            ]),
            'observacion' => fake()->optional()->sentence(),
        ];
    }
}