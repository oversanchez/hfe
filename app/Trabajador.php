<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = "trabajador";

    protected $fillable = ['nombres','apellido_paterno','apellido_materno','numero_documento','tipo_documento','fecha_nacimiento','sexo','direccion','telf_movil','telf_fijo','email','activo','grado_profesional_id','categoria_trabajador_id','especialidad_id','usuario_id'];

    public function categoria_trabajador(){
        return $this->belongsTo('App\Categoria_Trabajador');
    }
    public function especialidad(){
        return $this->belongsTo('App\Especialidad');
    }
    public function grado_profesional(){
        return $this->belongsTo('App\Grado_Profesional');
    }
    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

}
