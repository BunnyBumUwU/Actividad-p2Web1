<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Laptop Lenovo',
            'descripcion' => 'Laptop de 14 pulgadas ideal para trabajo.',
            'precio' => 12500.50
        ]);

        Producto::create([
            'nombre' => 'Mouse Logitech',
            'descripcion' => 'Mouse inalámbrico de alta precisión.',
            'precio' => 350.99
        ]);

        Producto::create([
            'nombre' => 'Teclado Mecánico',
            'descripcion' => 'Teclado RGB con switches azules.',
            'precio' => 899.00
        ]);
    }
}
