<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function clasificacion()
    {
        return $this->belongsToMany('App\clasificacion');
    }

    public function tipoProducto()
    {
        return $this->hasOne('App\tipoProducto');
    }

    public function votacionProducto()
    {
        return $this->hasMany('App\votacionProducto');
    }


}
