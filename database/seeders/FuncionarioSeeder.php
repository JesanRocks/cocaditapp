<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('funcionarios')->insert([
            [
                'cedula' => 'V26997629',
                'nombres' => 'Jesús',
                'apellidos' => 'Rodríguez',
                'correo' => 'sandino.rodriguez10@gmail.com',
                'telefono' => '04249189923',
                //'direccion' => 'Monagas, Venezuela',
                'password' => '$2y$12$zwEooKpbzMSCxUgdj9nYQeiRnwVdZOrlDuBazEwlmRtFmMPALkQjy', // Asegúrate de que la contraseña esté hasheada
            ],
            [
                'cedula' => 'V00000000',
                'nombres' => 'Administrador',
                'apellidos' => 'Root',
                'correo' => 'admin@example.com',
                'telefono' => '04249189923',
                //'direccion' => 'Maracaibo, Venezuela',
                'password' => '$2y$12$iDoztSYqEJB8LdCSRfqbYeSBSMBypyeoLX3gD19S.1XLW5B0ds6iO', // Asegúrate de que la contraseña esté hasheada
            ],
            // Agrega más funcionarios si es necesario
        ]);
    }
}
