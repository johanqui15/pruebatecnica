<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pedido;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Pedido::class;
    public function definition(): array
    {
        $fecha =$this->faker->dateTimeBetween('2023-07-01', '2023-09-30');
        return [
            'id_cliente' => $this->faker->numberBetween(1, 20),  
            'id_producto' => $this->faker->numberBetween(1, 200), 
            'cantidad' => $this->faker->numberBetween(1, 10),
            'precio_unitario' => $this->faker->randomFloat(2, 10, 500),
            'created_at' => $fecha,
        ];
    }
}
