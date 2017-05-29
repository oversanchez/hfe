<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaFamiliar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('numero_documento',15)->unique();
            $table->enum('tipo_documento',['DN','CE','PA']);
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['M','F']);
            $table->string('direccion');
            $table->string('email')->nullable();
            $table->string('telf_movil');
            $table->string('telf_fijo')->nullable();

            $table->enum('estado_civil',['SO','CA','VI','DI']);
            $table->string('ocupacion');
            $table->string('lugar_trabajo');

            $table->boolean('activo');

            $table->integer('nivel_educativo_id')->unsigned();
            $table->foreign('nivel_educativo_id')->references('id')->on('nivel_educativo');

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
        Schema::dropIfExists('familiar');
    }
}
