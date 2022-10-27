<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Produto::class;
    public function definition()
    {
        return [
            'idCategoria' => $this->faker->numberBetween(1, 15),
            'produto' => $this->faker->unique()->text(20),
            'valor' => $this->faker->numberBetween(1, 500),
        ];
    }
}
