<?php

namespace Database\Factories;

use App\Models\Cuenta;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Cliente;
use App\Models\TipoMoneda;
use App\Models\TipoCuentum;

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
        
        $tipoCuentum = TipoCuentum::first();
        if (!$tipoCuentum) {
            $tipoCuentum = TipoCuentum::factory()->create();
        }

        return [
            'Id_Cliente' => $this->faker->word,
            'Saldo' => $this->faker->numberBetween(0, 9223372036854775807),
            'Fecha_Apertura' => $this->faker->date('Y-m-d'),
            'tipo_cuenta_id' => $this->faker->word,
            'Estado' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'moneda_id' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
            'no_cuenta' => $this->faker->text($this->faker->numberBetween(5, 255))
        ];
    }
}
