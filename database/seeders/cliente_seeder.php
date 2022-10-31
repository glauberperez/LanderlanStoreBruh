<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class cliente_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbcliente')->insert(
            [
                'nome' => 'João',
                'email' => 'joao@gmail.com',
                'fone' => '999999999',
                'endereco' => 'Rua 1',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'cep' => '00000000',
                'dtNasc' => '2022-10-17 17:08:04',
                'estadoCivil' => 'Solteiro',
                'cpf' => '00000000000',
                'rg' => '000000000',
            ],
            [
                'nome' => 'Maria',
                'email' => 'maria@gmail.com',
                'fone' => '888888888',
                'endereco' => 'Rua 2',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'cep' => '00000000',
                'dtNasc' => '2022-10-17 17:08:04',
                'estadoCivil' => 'Solteiro',
                'cpf' => '11111111111',
                'rg' => '111111111',
            ],
            [
                'nome' => 'José',
                'email' => 'jose@jose.gmail.com',
                'fone' => '777777777',
                'endereco' => 'Rua 3',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'cep' => '00000000',
                'dtNasc' => '2022-10-17 17:08:04',
                'estadoCivil' => 'Solteiro',
                'cpf' => '22222222222',
                'rg' => '222222222',
            ],
            [
                'nome' => 'Glauber',
                'email' => 'glauber@hotmail.net',
                'fone' => '666666666',
                'endereco' => 'Rua 4',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'cep' => '11111111',
                'dtNasc' => '2022-10-17 17:08:04',
                'estadoCivil' => 'Nigga',
                'cpf' => '33333333333',
                'rg' => '3333333333'
            ],
            [
                'nome' => 'Athirson',
                'email' => 'athirson@gmail.net',
                'fone' => '555555555',
                'endereco' => 'Rua 5',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'cep' => '222222222',
                'dtNasc' => '2022-10-17 17:08:04',
                'estadoCivil' => 'Draven',
                'cpf' => '4444444444',
                'rg' => '4444444444'
            ]
        );

        Cliente::factory()->count(50)->create();
    }
}
