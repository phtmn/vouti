<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoEleitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_eleitor', function (Blueprint $table) {
            $table->unsignedInteger('eleitor_id')->nullable();
            $table->unsignedInteger('candidato_id')->nullable();

            $table->foreign('eleitor_id')->references('id')->on('eleitores');
            $table->foreign('candidato_id')->references('id')->on('candidatos');

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
        Schema::dropIfExists('candidato_eleitores');
    }
}
