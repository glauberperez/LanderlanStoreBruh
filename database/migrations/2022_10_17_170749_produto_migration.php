<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbproduto', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('produto')->unique()->nullable(false)->default('Produto');
            $table->string('valor')->nullable(false)->default(0);
            $table->integer('idCategoria')->nullable(false)->default(0);
            $table->timestamps();

            $table->foreign('idCategoria')->references('idCategoria')->on('tbcategoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
