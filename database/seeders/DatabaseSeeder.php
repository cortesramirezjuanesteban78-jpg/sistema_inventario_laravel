<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | ROLES
        |--------------------------------------------------------------------------
        | 1 = Administrador
        | 2 = Vendedor
        | 3 = Cliente
        */
        $roles = [
            ['nombre' => 'Administrador', 'descripcion' => 'Acceso total al sistema'],
            ['nombre' => 'Vendedor',      'descripcion' => 'Gestión de ventas e inventario'],
            ['nombre' => 'Cliente',       'descripcion' => 'Usuario cliente registrado'],
        ];

        foreach ($roles as $rol) {
            Role::firstOrCreate(['nombre' => $rol['nombre']], $rol);
        }

        /*
        |--------------------------------------------------------------------------
        | USUARIO ADMINISTRADOR POR DEFECTO
        |--------------------------------------------------------------------------
        */
        User::firstOrCreate(
            ['email' => 'admin@sistema.com'],
            [
                'role_id'  => 1,
                'name'     => 'Administrador',
                'apellido' => 'Sistema',
                'password' => Hash::make('password'),
                'estado'   => 'activo',
            ]
        );
    }
}
