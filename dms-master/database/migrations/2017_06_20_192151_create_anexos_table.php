<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path'); // endereço do arquivo no servidor
            $table->string('mimeType'); // MimeType
            $table->string('name'); // Nome do arquivo
            $table->string('extension'); // Extensão do arquivo ex: .pdf
            $table->string('size'); // tamanho do arquivo
            // Relacionando com os processos...
            $table->integer('processo_id')->unsigned()->nullable();
            $table->foreign('processo_id')->references('id')->on('processos')->onDelete('cascade');

            // Tipo de Documento
            $table->integer('documentotipo_id')->unsigned()->nullable();
            $table->foreign('documentotipo_id')->references('id')->on('documentos_tipos')->onDelete('cascade');


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
        Schema::dropIfExists('anexos');
    }
}
