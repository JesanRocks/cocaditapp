<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';

    protected $fillable = [
        'contribuyente_id',
        'monto',
        'referencia_pago',
        'fecha_pago',
        'metodo_pago_id',
    ];

    public function contribuyente()
    {
        return $this->belongsTo(Contribuyente::class);
    }

    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class, 'metodo_pago_id');
    }
}
