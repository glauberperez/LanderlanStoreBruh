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
        Schema::create('tbpedido', function (Blueprint $table) {
            $table->increments('idPedido');
            $table->integer('idProduto')->nullable(false)->default(0);
            $table->integer('idCliente')->nullable(false)->default(0);
            $table->string('quantidade')->nullable(false)->default(0);
            $table->string('descricao')->nullable(false)->default('Descrição');
            $table->decimal('valor', 8, 2)->nullable(false)->default(0);
            $table->dateTime('data')->nullable(false)->default('2022-10-17 17:08:04');
            $table->timestamps();

            $table->foreign('idProduto')->references('idProduto')->on('tbproduto');
            $table->foreign('idCliente')->references('idCliente')->on('tbcliente');
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
