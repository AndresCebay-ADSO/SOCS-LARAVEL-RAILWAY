<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rols')->insert([
            [
                'tipRol' => 'Superadministrador',  // BY andres cebay
                'nivRol' => '1',              // BY andres cebay
                'desRol' => 'Acceso total al sistema', // BY andres cebay
                'estRol' => 'ACTIVO',         // BY andres cebay
            ],
            [
                'tipRol' => 'Administrador',        // BY andres cebay
                'nivRol' => '2',              // BY andres cebay
                'desRol' => 'Acceso a CRUD del software', // BY andres cebay
                'estRol' => 'ACTIVO',         // BY andres cebay
            ],
            [
                'tipRol' => 'Cliente',       // BY andres cebay
                'nivRol' => '3',              // BY andres cebay
                'desRol' => 'Acceso a compras y pedidos', // BY andres cebay
                'estRol' => 'ACTIVO',         // BY andres cebay
            ],
        ]);
    }
}
