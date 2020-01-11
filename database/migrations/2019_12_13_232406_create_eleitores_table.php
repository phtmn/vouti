<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleitores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('genero')->nullable();
            $table->string('data_nasc')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('num')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('num_titulo')->nullable();
            $table->unsignedInteger('zona_id')->nullable();
            $table->string('secao')->nullable();

            $table->foreign('zona_id')
                ->references('id')->on('locais_votacao');

           

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
        Schema::dropIfExists('eleitores');
    }
}
