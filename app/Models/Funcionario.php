<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Funcionario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'correo',
        'telefono',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
