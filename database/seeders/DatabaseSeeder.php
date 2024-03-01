<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TipoCuenta;
use App\Models\TipoMoneda;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TipoMonedasTableSeeder::class,
            TipoMovimientosTableSeeder::class,
            TipoCuentasTableSeeder::class,
            ClientesTableSeeder::class,
        ]);

        User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@prueba.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
