<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicloModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclo_modulo', function (Blueprint $table) {
            $table->bigInteger('ciclo_id')->unsigned();
            $table->bigInteger('modulo_codigo')->unsigned();
            $table->timestamps();
            $table->foreign('ciclo_id')->references('id')->on('ciclos');
            $table->foreign('modulo_codigo')->references('codigo')->on('modulos');
            $table->primary(['ciclo_id', 'modulo_codigo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciclo_modulo');
    }
}
