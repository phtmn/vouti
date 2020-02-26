<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanhaEleitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanha_eleitor', function (Blueprint $table) {
            $table->unsignedInteger('eleitor_id')->nullable();
            $table->unsignedInteger('campanha_id')->nullable();

            $table->foreign('eleitor_id')->references('id')->on('eleitores');
            $table->foreign('campanha_id')->references('id')->on('campanhas');
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
        Schema::dropIfExists('campanha_eleitor');
    }
}
