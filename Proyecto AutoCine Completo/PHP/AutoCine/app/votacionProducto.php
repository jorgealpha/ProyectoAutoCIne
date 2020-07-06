<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class votacionProducto extends Model
{
    public function Producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
