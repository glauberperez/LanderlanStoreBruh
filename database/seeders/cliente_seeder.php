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
                'numero' => 1,
                'complemento' => 'Casa',
                'dtNasc' => '2022-10-17 17:08:04',
                'estadoCivil' => 'Solteiro',
                'cpf' => '00000000000',
                'rg' => '000000000',
            ]
        );

        Cliente::factory()->count(50)->create();
    }
}
