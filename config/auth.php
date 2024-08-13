<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'contribuyentes',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'contribuyentes',
        ],

        'funcionario' => [
            'driver' => 'session',
            'provider' => 'funcionarios',
        ],
    ],

    'providers' => [
        'contribuyentes' => [
            'driver' => 'eloquent',
            'model' => App\Models\Contribuyente::class,
        ],

        'funcionarios' => [
            'driver' => 'eloquent',
            'model' => App\Models\Funcionario::class,
        ],
    ],

    'passwords' => [
        'contribuyentes' => [
            'provider' => 'contribuyentes',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],

        'funcionarios' => [
            'provider' => 'funcionarios',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
