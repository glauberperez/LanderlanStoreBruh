<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;


class categoria_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbcategoria')->insert(
            [
                'categoria' => 'Trembolona',
            ],
            [
                'categoria' => 'Durateston',
            ],
            [
                'categoria' => 'Anavar Oxandrolona',
            ],
            [
                'categoria' => 'Stanozolol Winstrol',
            ],
            [
                'categoria' => 'Deca Durabolin',
            ]
        );

        Categoria::factory()->count(50)->create();
    }
}
