<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MetodoPago;

class MetodosPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        MetodoPago::create(['nombre' => 'Efectivo']);
        MetodoPago::create(['nombre' => 'Transferencia Bancaria']);
        MetodoPago::create(['nombre' => 'Pago Móvil']);
        MetodoPago::create(['nombre' => 'BioPago']);
        MetodoPago::create(['nombre' => 'Tarjeta de Crédito']);
        MetodoPago::create(['nombre' => 'Tarjeta de Débito']);
        MetodoPago::create(['nombre' => 'Cheque']);
        MetodoPago::create(['nombre' => 'Criptoactivos']);
    }
}
