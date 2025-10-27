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
            'nombre' => 'Polera Nike',
            'precio' => 200.50,
            'categoria_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Polera Adidas',
            'precio' => 920,
            'categoria_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Silla Oficina',
            'precio' => 1950.75,
            'categoria_id' => 4
        ]);
    }
}
