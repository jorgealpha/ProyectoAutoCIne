<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartelera extends Model
{
    public function Ubicacion()
    {
        return $this->hasOne('App\Ubicacion');
    }

    public function Funcion()
    {
        return $this->belongsToMany('App\Funcion');
    }

}
