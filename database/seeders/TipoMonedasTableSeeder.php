<?php

namespace Database\Seeders;

use App\Models\TipoMoneda;
use Illuminate\Database\Seeder;

class TipoMonedasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoMoneda::factory()
            ->count(1)
            ->create([
                'nombre' => 'Quetzal',
                'simbolo' => 'Q',
                'estado' => "Activo",
            ]);

        TipoMoneda::factory()
            ->count(1)
            ->create([
                'nombre' => 'Dolar',
                'simbolo' => 'US$',
                'estado' => "Activo",
            ]);
    }
}
