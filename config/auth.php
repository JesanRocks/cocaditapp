<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'contribuyente' => [
            'driver' => 'session',
            'provider' => 'contribuyentes',
        ],

        'funcionario' => [
            'driver' => 'session',
            'provider' => 'funcionarios',
        ],
    ],

    'providers' => [

        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

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
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        
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
