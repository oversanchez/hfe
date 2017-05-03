<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaFichaMatricula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_matricula', function (Blueprint $table) {
            $table->increments('id');

            //Datos del Padre
            $table->string('padre_nombres');
            $table->string('padre_apellido_paterno');
            $table->string('padre_apellido_materno')->nullable();
            $table->string('padre_numero_documento',15);
            $table->enum('padre_tipo_documento',['DN','CE','PA']);
            $table->date('padre_fecha_nacimiento');
            $table->enum('padre_sexo',['M','F']);
            $table->string('padre_direccion');
            $table->string('padre_email')->nullable();
            $table->string('padre_telf_movil');
            $table->string('padre_telf_fijo')->nullable();
            $table->boolean('padre_apoderado');
            $table->boolean('padre_vive_educando');
            $table->enum('padre_estado_civil',['SO','CA','VI','DI']);
            $table->string('padre_ocupacion');
            $table->string('padre_lugar_trabajo');
            $table->integer('padre_parentesco_id')->unsigned();
            $table->foreign('padre_parentesco_id')->references('id')->on('parentesco');
            $table->integer('padre_nivel_educativo_id')->unsigned();
            $table->foreign('padre_nivel_educativo_id')->references('id')->on('nivel_educativo');
            //Datos del Madre
            $table->string('madre_nombres');
            $table->string('madre_apellido_paterno');
            $table->string('madre_apellido_materno')->nullable();
            $table->string('madre_numero_documento',15);
            $table->enum('madre_tipo_documento',['DN','CE','PA']);
            $table->date('madre_fecha_nacimiento');
            $table->enum('madre_sexo',['M','F']);
            $table->string('madre_direccion');
            $table->string('madre_email')->nullable();
            $table->string('madre_telf_movil');
            $table->string('madre_telf_fijo')->nullable();
            $table->boolean('madre_apoderado');
            $table->boolean('madre_vive_educando');
            $table->enum('madre_estado_civil',['SO','CA','VI','DI']);
            $table->string('madre_ocupacion');
            $table->string('madre_lugar_trabajo');
            $table->integer('madre_parentesco_id')->unsigned();
            $table->foreign('madre_parentesco_id')->references('id')->on('parentesco');
            $table->integer('madre_nivel_educativo_id')->unsigned();
            $table->foreign('madre_nivel_educativo_id')->references('id')->on('nivel_educativo');
            //Datos del Apoderado
            $table->string('apoderado_nombres');
            $table->string('apoderado_apellido_paterno');
            $table->string('apoderado_apellido_materno')->nullable();
            $table->string('apoderado_numero_documento',15);
            $table->enum('apoderado_tipo_documento',['DN','CE','PA']);
            $table->date('apoderado_fecha_nacimiento');
            $table->enum('apoderado_sexo',['M','F']);
            $table->string('apoderado_direccion');
            $table->string('apoderado_email')->nullable();
            $table->string('apoderado_telf_movil');
            $table->string('apoderado_telf_fijo')->nullable();
            $table->boolean('apoderado_apoderado');
            $table->boolean('apoderado_vive_educando');
            $table->enum('apoderado_estado_civil',['SO','CA','VI','DI']);
            $table->string('apoderado_ocupacion');
            $table->string('apoderado_lugar_trabajo');
            $table->integer('apoderado_parentesco_id')->unsigned();
            $table->foreign('apoderado_parentesco_id')->references('id')->on('parentesco');
            $table->integer('apoderado_nivel_educativo_id')->unsigned();
            $table->foreign('apoderado_nivel_educativo_id')->references('id')->on('nivel_educativo');
            //Datos del alumno
            $table->string('alumno_nombres');
            $table->string('alumno_apellido_paterno');
            $table->string('alumno_apellido_materno')->nullable();
            $table->string('alumno_numero_documento',15)->unique();
            $table->enum('alumno_tipo_documento',['DN','CE','PA']);
            $table->date('alumno_fecha_nacimiento');
            $table->enum('alumno_sexo',['M','F']);
            $table->string('alumno_direccion');
            $table->string('alumno_telf_fijo');
            $table->boolean('alumno_padres_juntos');

            $table->integer('alumno_colegio_procedencia_id')->unsigned();
            $table->foreign('alumno_colegio_procedencia_id')->references('id')->on('colegio_procedencia');

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
        Schema::dropIfExists('ficha_matricula');
    }
}
