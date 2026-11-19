<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Proveedor>
 */
class ProveedorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ruc' => fake()->unique()->numerify('###########'),
            'razon_social' => fake()->company(),
            'telefono' => fake()->numerify('9########'),
            'direccion' => fake()->address(),
            'correo' => fake()->unique()->companyEmail(),
        ];
    }
}