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
        Schema::create('tbcliente', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->string('nome')->nullable(false)->default('Nome');
            $table->string('email')->nullable(false)->default('Email');
            $table->string('fone')->nullable(false)->default('Telefone');
            $table->string('endereco')->nullable(false)->default('Endereço');
            $table->string('cidade')->nullable(false)->default('Cidade');
            $table->string('estado')->nullable(false)->default('Estado');
            $table->string('cep')->nullable(false)->default('CEP');
            $table->dateTime('dtNasc')->nullable(false)->default('2022-10-17 17:08:04');
            $table->string('estadoCivil')->nullable(false)->default('Estado Civil');
            $table->string('cpf')->nullable(false)->default('CPF');
            $table->string('rg')->nullable(false)->default('RG');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbcliente');
    }
};
