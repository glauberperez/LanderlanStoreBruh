<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pedido;

class pedido_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbpedido')->insert(
            [
                'idCliente' => 1,
                'idProduto' => 1,
                'quantidade' => 1,
                'descricao' => 'Trembolona',
                'valor' => 1,
                'data' => '2022-10-17 17:08:04',
            ],
            [
                'idCliente' => 2,
                'idProduto' => 2,
                'quantidade' => 2,
                'descricao' => 'Durateston',
                'valor' => 2,
                'data' => '2022-10-17 17:08:04',
            ],
            [
                'idCliente' => 3,
                'idProduto' => 3,
                'quantidade' => 3,
                'descricao' => 'Anavar Oxandrolona',
                'valor' => 3,
                'data' => '2022-10-17 17:08:04',
            ],
            [
                'idCliente' => 4,
                'idProduto' => 4,
                'quantidade' => 4,
                'descricao' => 'Stanozolol Winstrol',
                'valor' => 4,
                'data' => '2022-10-17 17:08:04',
            ],
            [
                'idCliente' => 5,
                'idProduto' => 5,
                'quantidade' => 5,
                'descricao' => 'Deca Durabolin',
                'valor' => 5,
                'data' => '2022-10-17 17:08:04',
            ]
        );

        Pedido::factory()->count(25)->create();
    }
}
