<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = "alumno";

    protected $fillable = ['codigo_educando','activo','persona_id','colegio_procedencia_id'];

    public function persona(){
        return $this->belongsTo('App\Persona');
    }

    public function colegio_procedencia(){
        return $this->belongsTo('App\Colegio_Procedencia');
    }

}
