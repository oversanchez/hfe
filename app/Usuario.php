<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";

    protected $fillable = ['alias','clave','activo','persona_id'];

    public function persona(){
        return $this->belongsTo('App\Persona');
    }
}
