<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('rg');
            $table->string('nome_empresarial');
            $table->string('ie'); // Inscrição estadual
            $table->string('im');// Inscrição municipal
            $table->string('personalidade');
            $table->string('cpf_cnpj');
            $table->string('telefone_1');
            $table->string('telefone_2');
            $table->string('telefone_3');
            $table->string('telefone_4');
            $table->string('telefone_5');
            $table->string('email');
            $table->string('site');

            // Relacionando com os cliente...
            $table->integer('endereco_id')->unsigned()->nullable();
            $table->foreign('endereco_id')->references('id')->on('enderecos');



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
        Schema::dropIfExists('clientes');
    }
}
