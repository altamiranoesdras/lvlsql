<?php

namespace Database\Seeders;

use App\Models\TipoCuenta;
use Illuminate\Database\Seeder;

class TipoCuentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoCuenta::factory()
            ->count(1)
            ->create([
                'descripcion' => 'Cuenta de ahorro',
            ]);

        TipoCuenta::factory()
            ->count(1)
            ->create([
                'descripcion' => 'Cuenta de credito',
            ]);
    }
}
