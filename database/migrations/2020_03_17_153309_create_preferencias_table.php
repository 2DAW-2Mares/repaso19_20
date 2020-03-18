<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('modulo_codigo')->unsigned();
            $table->unsignedTinyInteger('orden');
            $table->boolean('aceptado')->default(false);
            $table->enum('role', \App\Preferencia::$roles);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('modulo_codigo')->references('codigo')->on('modulos');
            $table->unique(['user_id', 'modulo_codigo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferencias');
    }
}
