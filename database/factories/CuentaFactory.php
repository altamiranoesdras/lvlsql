<?php

namespace Database\Factories;

use App\Models\Cuenta;
use App\Models\TipoCuenta;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Cliente;
use App\Models\TipoMoneda;

class CuentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuenta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'Id_Cliente' => Cliente::all()->random()->id,
            'Saldo' => $this->faker->numberBetween(500, 3000),
            'no_cuenta' => $this->faker->randomNumber(5),
            'Fecha_Apertura' => Carbon::now()->subMonths(rand(1, 3)),
            'tipo_cuenta_id' => TipoCuenta::all()->random()->id,
            'Estado' => $this->faker->randomElement(['Activo', 'Inactivo']),
            'moneda_id' => TipoMoneda::all()->random()->id,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        ];
    }
}
