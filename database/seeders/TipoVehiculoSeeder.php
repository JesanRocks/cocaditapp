<?php
// database/seeders/TipoVehiculoSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoVehiculo;

class TipoVehiculoSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = ['Automóvil', 'Camión', 'Moto', 'Autobús'];

        foreach ($tipos as $tipo) {
            TipoVehiculo::create(['nombre' => $tipo]);
        }
    }
}
