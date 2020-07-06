<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function Funcion()
    {
        return $this->belongsToMany('App\Funcion');
    }
}
