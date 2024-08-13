<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Contribuyente extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'rif',
        'razon_social',
        'correo',
        'telefono',
        'num_habitacion',
        'direccion',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
