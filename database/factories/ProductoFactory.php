<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Producto::class;
    public function definition(): array
    {
        return [
            'nombre_producto' => $this->faker->word,
            'precio_unitario' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
