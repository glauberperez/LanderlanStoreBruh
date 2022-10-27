<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            categoria_seeder::class,
            cliente_seeder::class,
            produto_seeder::class,
            pedido_seeder::class,
        ]);
    }
}
