<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'fone' => $this->faker->phoneNumber,
            'rua' => $this->faker->address,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,
            'cep' => $this->faker->postcode,
            'numero' => $this->faker->buildingNumber,
            'bairro' => $this->faker->streetName,
            'complemento' => $this->faker->secondaryAddress,
            'cpf' => $this->faker->unique()->regexify('[0-9]{11}'),
            'rg' => $this->faker->unique()->regexify('[0-9]{9}'),
            'dtNasc' => $this->faker->dateTime,
            'estadoCivil' => $this->faker->randomElement(['Solteiro', 'Casado', 'Divorciado', 'Viúvo']),
        ];
    }
}
