<?php

namespace Database\Seeders;

use App\Models\TipoMovimiento;
use Illuminate\Database\Seeder;

class TipoMovimientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoMovimiento::factory()
            ->count(1)
            ->create([
                'Descripcion' => 'Deposito',
            ]);

        TipoMovimiento::factory()
            ->count(1)
            ->create([
                'Descripcion' => 'Retiro',
            ]);
    }
}
