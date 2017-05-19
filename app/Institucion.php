<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = "institucion";

    protected $fillable = ['telefonos','direccion','correo','ciudad','link_mapa','bienvenida_texto','bienvenida_url','porque_nosotros_1','porque_nosotros_2','porque_nosotros_3','porque_nosotros_4'];
}
