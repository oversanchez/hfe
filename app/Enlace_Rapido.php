<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlace_Rapido extends Model
{
    protected $table = "enlace_rapido";

    protected $fillable = ['orden','nombre','url','color','publico'];

}
