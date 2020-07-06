<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public function clasificacionPelicula()
    {
        return $this->hasOne('App\clasificacionPelicula');
    }

    public function Genero()
    {
        return $this->belongsToMany('App\Genero');
    }

    public function votacionPelicula()
    {
        return $this->hasMany('App\clasificacionPelicula');
    }

}
