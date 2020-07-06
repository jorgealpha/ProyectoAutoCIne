<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public function Pelicula()
    {
        return $this->belongsToMany('App\Pelicula');
    }
}
