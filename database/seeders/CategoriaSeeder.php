<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nombre' => 'Deportes']);
        Categoria::create(['nombre' => 'Ropa']);
        Categoria::create(['nombre' => 'Cosmetidos']);
        Categoria::create(['nombre' => 'Electrodomésticos']);
        Categoria::create(['nombre' => 'Juguetes']);
    }
}
