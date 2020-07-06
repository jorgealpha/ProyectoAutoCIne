<?php

use Illuminate\Database\Seeder;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\tipoProducto();
        $plataforma->nombre = 'Gaseosa';
        $plataforma->descripcion = 'Bebidas de todo tipo';
        $plataforma->save();

        $plataforma = new \App\tipoProducto();
        $plataforma->nombre = 'Gaseosa';
        $plataforma->descripcion = 'Bebidas de todo tipo';
        $plataforma->save();

        $plataforma = new \App\tipoProducto();
        $plataforma->nombre = 'Gaseosa';
        $plataforma->descripcion = 'Bebidas de todo tipo';
        $plataforma->save();

        $plataforma = new \App\tipoProducto();
        $plataforma->nombre = 'Gaseosa';
        $plataforma->descripcion = 'Bebidas de todo tipo';
        $plataforma->save();
    }
}
