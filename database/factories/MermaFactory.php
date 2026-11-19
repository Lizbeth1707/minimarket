<?php

namespace Database\Factories;

use App\Models\Merma;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Merma>
 */
class MermaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'producto_id' => Producto::factory(),
            'user_id' => User::factory(),
            'cantidad' => fake()->numberBetween(1, 10),
            'fecha_merma' => fake()->date(),
            'tipo' => fake()->randomElement([
                'danado',
                'vencido',
            ]),
            'observacion' => fake()->optional()->sentence(),
        ];
    }
}