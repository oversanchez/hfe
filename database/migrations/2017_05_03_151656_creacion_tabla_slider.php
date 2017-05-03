<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden');
            $table->string('foto');
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('url')->nullable();
            $table->string('nombre_boton')->nullable();
            $table->boolean('publico')->default(true);
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
        Schema::dropIfExists('slider');
    }
}
