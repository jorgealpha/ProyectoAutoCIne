<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    public function Cartelera(){

        return $this->belongsTo('App\Cartelera');

    }
}
