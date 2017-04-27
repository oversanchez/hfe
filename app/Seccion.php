<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = "seccion";

    protected $fillable = ['nombre','abreviatura'];

    public function grado(){
        return $this->belongsTo('App\Grado');
    }
    public function anio_lectivo(){
        return $this->belongsTo('App\Anio_Lectivo');
    }
    public function trabajador(){
        return $this->belongsTo('App\Trabajador');
    }
    
}
