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
    public function definition()
    {
        return [
            'idCliente' => $this->faker->numberBetween(1, 15),
            'idProduto' => $this->faker->numberBetween(1, 15),
            'quantidade' => $this->faker->numberBetween(1, 15),
            'valor' => $this->faker->numberBetween(1, 500),
            'descricao' => $this->faker->text(20),
            'data' => $this->faker->dateTime,
        ];
    }
}
