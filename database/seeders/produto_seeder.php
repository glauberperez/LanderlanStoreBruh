<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produto_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbproduto')->insert(
            [
                'produto' => 'Trembolona',
                'valor' => 1,
                'idCategoria' => 1,
                'foto' => 'sunglasses.jpg'
            ],
            [
                'produto' => 'Durateston',
                'valor' => 2,
                'idCategoria' => 2,
                'foto' => 'sunglasses.jpg'
            ],
            [
                'produto' => 'Anavar Oxandrolona',
                'valor' => 3,
                'idCategoria' => 3,
                'foto' => 'sunglasses.jpg'
            ],
            [
                'produto' => 'Stanozolol Winstrol',
                'valor' => 4,
                'idCategoria' => 4,
                'foto' => 'sunglasses.jpg'
            ],
            [
                'produto' => 'Deca Durabolin',
                'valor' => 5,
                'idCategoria' => 5,
                'foto' => 'sunglasses.jpg'

            ]
        );

        Produto::factory()->count(25)->create();
    }
}
