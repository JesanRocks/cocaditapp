<?php
// database/seeders/ColorSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    public function run(): void
    {
        $colors = ['Amarrillo','Azul','Rojo','Verde','Morado', 'Naranja','Negro', 'Blanco', 'Gris'];

        foreach ($colors as $color) {
            Color::create(['nombre' => $color]);
        }
    }
}
