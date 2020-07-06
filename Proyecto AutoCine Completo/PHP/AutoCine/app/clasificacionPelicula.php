<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clasificacionPelicula extends Model
{
    public function Pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }
}
