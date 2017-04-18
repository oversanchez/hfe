<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = "trabajador";

    protected $fillable = ['activo','categoria_trabajador_id'];

    public function categoria_trabajador(){
        return $this->belongsTo('App\Categoria_Trabajador');
    }
    public function especialidad(){
        return $this->belongsTo('App\Especialidad');
    }
}
