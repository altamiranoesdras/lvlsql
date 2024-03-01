<?php

namespace Database\Factories;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'dpi' => $this->faker->randomNumber(9, true),
            'Nombre' => $this->faker->firstName,
            'Apellido' => $this->faker->lastName,
            'Direccion' => $this->faker->address,
            'Telefono' => $this->faker->randomNumber(8, true),
            'Fecha_Nac' => Carbon::now()->subYears(rand(18, 65)),
            'Estado' => $this->faker->randomElement(['Activo', 'Inactivo']),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        ];
    }
}
