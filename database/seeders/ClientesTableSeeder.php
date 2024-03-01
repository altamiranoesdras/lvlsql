<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Cuenta;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory()
            ->has(Cuenta::factory()->count(3))
            ->count(10)
            ->create();
    }
}
