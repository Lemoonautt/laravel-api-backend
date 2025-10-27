<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Producto::create([
            'nombre' => 'Laptop Lenovo',
            'precio' => 20000.50,
            'categoria_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Samsung S23 Ultra',
            'precio' => 9200.00,
            'categoria_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Silla Oficina',
            'precio' => 1950.75,
            'categoria_id' => 2
        ]);
    }
}
