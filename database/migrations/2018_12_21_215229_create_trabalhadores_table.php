<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabalhadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->string('cpf', 30);
            $table->string('rg', 30)->nullable();
            $table->string('sexo', 30)->nullable();
            $table->dateTime('data_nascimento')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telefone_1', 50)->nullable();
            $table->string('telefone_2', 50)->nullable();
            $table->string('profissao', 100)->nullable();
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
        Schema::dropIfExists('trabalhadores');
    }
}
