<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // La contraseña de ambos usuarios es: password

        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@minimarket.test',
            'rol' => 'administrador',
        ]);

        User::factory()->create([
            'name' => 'Encargado de Almacén',
            'email' => 'almacen@minimarket.test',
            'rol' => 'encargado_almacen',
        ]);
    }
}