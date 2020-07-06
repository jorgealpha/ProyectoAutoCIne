<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoProducto extends Model
{
    public function Producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
