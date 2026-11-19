<?php

namespace Database\Factories;

use App\Models\Entrada;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntradaFactory extends Factory
{
    protected $model = Entrada::class;

    public function definition(): array
    {
        return [
            'producto_id' => Producto::factory(),
            'proveedor_id' => Proveedor::factory(),
            'user_id' => User::factory(),
            'cantidad' => fake()->numberBetween(1, 100),
            'fecha_entrada' => fake()->date(),
            'fecha_vencimiento' => fake()->optional()->date(),
            'observacion' => fake()->optional()->sentence(),
        ];
    }
}