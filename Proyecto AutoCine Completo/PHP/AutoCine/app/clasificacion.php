<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clasificacion extends Model
{
    public function Producto()
    {
        return $this->belongsToMany('App\Producto');
    }
}
