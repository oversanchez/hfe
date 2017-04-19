<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado_Profesional extends Model
{
    protected $table = "grado_profesional";

    protected $fillable = ['nombre','abreviatura'];

    public function trabajadors(){
        return $this->hasMany('App\Trabajador');
    }
}
