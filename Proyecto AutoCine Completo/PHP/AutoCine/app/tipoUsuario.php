<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoUsuario extends Model
{
    public function Usuario(){

        return $this->belongsTo('App\Usuario');

    }
}
