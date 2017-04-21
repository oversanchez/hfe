<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "persona";

    protected $fillable = ['nombres','apellido_paterno','apellido_materno','numero_documento','tipo_documento','fecha_nacimiento','sexo','direccion','telf_movil','telf_fijo'];

    public function trabajadors(){
        return $this->hasOne('App\Trabajador');
    }

    public function usuarios(){
        return $this->hasOne('App\Usuario');
    }

    public function alumnos(){
        return $this->hasOne('App\Alumno');
    }
}
