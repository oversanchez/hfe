<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('numero_documento',15)->unique();
            $table->enum('tipo_documento',['DN','CE','PA']);
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['M','F']);
            $table->string('direccion');
            $table->string('telf_fijo');

            $table->string('codigo_educando')->nullable();
            $table->string('codigo_recaudacion')->nullable();
            $table->string('url_foto')->nullable();
            $table->boolean('padres_juntos');
            $table->boolean('activo');

            $table->integer('colegio_procedencia_id')->unsigned();
            $table->foreign('colegio_procedencia_id')->references('id')->on('colegio_procedencia');

            $table->integer('usuario_id')->unsigned()->nullable()->unique();
            $table->foreign('usuario_id')->references('id')->on('usuario');

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
        Schema::dropIfExists('alumno');
    }
}
