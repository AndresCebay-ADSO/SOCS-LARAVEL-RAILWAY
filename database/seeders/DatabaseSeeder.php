<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar seeder de roles (tabla rols) // BY andres cebay
        $this->call([
            RolesSeeder::class, // BY andres cebay
        ]);
    }
}
