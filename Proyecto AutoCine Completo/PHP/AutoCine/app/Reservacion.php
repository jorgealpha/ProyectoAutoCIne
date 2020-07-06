<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    public function Ubicacion()
    {
        return $this->hasOne('App\Ticket');
    }

    public function Producto()
    {
        return $this->hasMany('App\Producto');
    }

    public function Cartelera()
    {
        return $this->hasOne('App\Cartelera');
    }

    public function Funcion()
    {
        return $this->hasMany('App\Funcion');
    }

    public function Usuario()
    {
        return $this->hasOne('App\Usuario');
    }
}
