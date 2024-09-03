<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';

    protected $fillable = [
        'contribuyente_id',
        'tipo_vehiculo_id',
        'marca_id',
        'modelo',
        'año',
        'color_id',
        'ejes',
        'placa',
        'tipo_uso',
        'valor_fiscal',
        'fecha_registro',
    ];

    // Relaciones (si son necesarias)
    public function contribuyente()
    {
        return $this->belongsTo(Contribuyente::class);
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
}
