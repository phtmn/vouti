<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaboeleitoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caboeleitorals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_completo', 50)->nullable();            
            $table->string('cpf', 5)->unique();
            $table->string('telefone', 50)->nullable();
            $table->string('email',100)->unique();
            $table->string('senha', 8)->nullable();
            $table->string('repetir_senha', 8)->nullable();            
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
        Schema::dropIfExists('caboeleitorals');
    }
}
