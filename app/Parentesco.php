<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table = "parentesco";

    protected $fillable = ['nombre'];

    public function miembro_familias(){
        return $this->hasMany('App\Miembro_Familia');
    }
}
