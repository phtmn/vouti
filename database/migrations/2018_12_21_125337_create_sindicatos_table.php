<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sindicatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo', 100)->nullable();
            $table->string('sigla', 50)->nullable();
            $table->string('razao_social', 100);
            $table->string('cnpj', 30)->unique();
            $table->string('numero_trabalhadores', 150)->nullable();
            $table->string('email', 100)->unique();
            $table->string('telefone_1', 50);
            $table->string('telefone_2', 50)->nullable();
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
        Schema::dropIfExists('sindicatos');
    }
}
