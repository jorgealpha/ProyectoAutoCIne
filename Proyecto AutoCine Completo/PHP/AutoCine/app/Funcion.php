<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    public function Ticket()
    {
        return $this->belongsToMany('App\Ticket');
    }

    public function Pelicula()
    {
        return $this->hasOne('App\Pelicula');
    }

    public function Cartelera()
    {
        return $this->belongsToMany('App\Cartelera');
    }

    public function Reservacion()
    {
        return $this->belongsTo('App\Reservacion');
    }

}
