<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = "alumno";

    protected $fillable = ['nombres','apellido_paterno','apellido_materno','numero_documento','tipo_documento','fecha_nacimiento','sexo','direccion','telf_fijo','codigo_educando','url_foto','codigo_recaudacion','activo','padres_juntos','colegio_procedencia_id','usuario_id'];

    public function colegio_procedencia(){
        return $this->belongsTo('App\Colegio_Procedencia');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

    public function apoderados(){
        return $this->hasMany('App\Apoderado');
    }

}
