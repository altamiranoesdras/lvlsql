<?php

namespace Database\Factories;

use App\Models\Cliente;
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
            'Nombre' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'Apellido' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'Direccion' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'Telefono' => $this->faker->word,
            'Fecha_Nac' => $this->faker->date('Y-m-d'),
            'Estado' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
            'dpi' => $this->faker->word
        ];
    }
}
