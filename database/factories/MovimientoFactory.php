<?php

namespace Database\Factories;

use App\Models\Movimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Cuentum;
use App\Models\TipoMovimiento;

class MovimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $tipoMovimiento = TipoMovimiento::first();
        if (!$tipoMovimiento) {
            $tipoMovimiento = TipoMovimiento::factory()->create();
        }

        return [
            'Id_Cuenta' => $this->faker->word,
            'Saldo_Inicial' => $this->faker->numberBetween(0, 9223372036854775807),
            'Saldo_Final' => $this->faker->numberBetween(0, 9223372036854775807),
            'Monto' => $this->faker->numberBetween(0, 9223372036854775807),
            'Fecha_Mov' => $this->faker->date('Y-m-d'),
            'Id_TipoMov' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
