<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->string('logo', 100)->nullable();
            $table->string('nome_partido', 50)->nullable();
            $table->string('sigla', 15)->nullable();
            $table->string('num_legenda', 50)->nullable();
            $table->string('nome_presidente', 50)->nullable();
            $table->string('site', 50)->nullable();

            $table->unsignedInteger('papel_id');
            // $table->unsignedInteger('sindicato_id')->nullable();
            $table->unsignedInteger('caboeleitoral_id')->nullable(); 
            $table->unsignedInteger('candidato_id')->nullable();

            $table->foreign('papel_id')
                ->references('id')->on('papeis')->onDelete('cascade');
            // $table->foreign('sindicato_id')
            //     ->references('id')->on('sindicatos')->onDelete('cascade');
            // $table->foreign('caboeleitoral_id') 
            //     ->references('id')->on('cabos_eleitorais')->onDelete('cascade');
                // $table->foreign('candidato_id')
                // ->references('id')->on('candidatos')->onDelete('cascade');
           
            

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
