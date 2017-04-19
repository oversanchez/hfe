<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = "trabajador";

    protected $fillable = ['activo','persona_id','grado_profesional_id','categoria_trabajador_id','especialidad_id'];

    public function categoria_trabajador(){
        return $this->belongsTo('App\Categoria_Trabajador');
    }
    public function especialidad(){
        return $this->belongsTo('App\Especialidad');
    }
    public function grado_profesional(){
        return $this->belongsTo('App\Grado_Profesional');
    }
    public function persona(){
        return $this->belongsTo('App\Persona');
    }
}
