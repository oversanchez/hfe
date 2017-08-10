<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";

    protected $fillable = ['alias','clave','tipo','persona_id','cambia_clave','activo'];

    public function alumnos(){
        return $this->hasOne('App\Alumno');
    }
    public function trabajadors(){
        return $this->hasOne('App\Alumno');
    }

}
