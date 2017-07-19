<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaPuestoTrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto_trabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');

            //Responsables
            $table->integer('primer_trabajador_id')->unsigned()->nullable();
            $table->foreign('primer_trabajador_id')->references('id')->on('trabajador');

            $table->integer('segundo_trabajador_id')->unsigned()->nullable();
            $table->foreign('segundo_trabajador_id')->references('id')->on('trabajador');

            $table->integer('tercer_trabajador_id')->unsigned()->nullable();
            $table->foreign('tercer_trabajador_id')->references('id')->on('trabajador');

            $table->boolean('permiso_registro')->default(true);

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
        Schema::dropIfExists('puesto_trabajo');
    }
}
