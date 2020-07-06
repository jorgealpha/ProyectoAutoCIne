<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class votacionPelicula extends Model
{
    
    public function Pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }

}
