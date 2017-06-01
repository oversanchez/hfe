<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaInstitucion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefonos');
            $table->string('correo');
            $table->string('ciudad');
            $table->string('direccion');
            $table->text('link_mapa')->nullable();
            $table->text('bienvenida_texto')->nullable();
            $table->text('bienvenida_url')->nullable();
            $table->string('porque_nosotros_1')->nullable();
            $table->string('porque_nosotros_2')->nullable();
            $table->string('porque_nosotros_3')->nullable();
            $table->string('porque_nosotros_4')->nullable();
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
        Schema::dropIfExists('institucion');
    }
}