<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    public function run(): void
    {
        $proveedores = [
            [
                'ruc' => '20123456789',
                'razon_social' => 'Distribuidora Cusco SAC',
                'telefono' => '984123456',
                'direccion' => 'Av. La Cultura, Cusco',
                'correo' => 'ventas@distribuidoracusco.com',
            ],
            [
                'ruc' => '20987654321',
                'razon_social' => 'Comercial Andina SAC',
                'telefono' => '987654321',
                'direccion' => 'Av. El Sol, Cusco',
                'correo' => 'contacto@comercialandina.com',
            ],
        ];

        foreach ($proveedores as $proveedor) {
            Proveedor::firstOrCreate(
                ['ruc' => $proveedor['ruc']],
                $proveedor
            );
        }
    }
}