<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videojuego = new \App\Producto();
        $videojuego->nombre = 'Chocolates Hersheys';
        $videojuego->descripcion = 'Excelente calidad';
        $videojuego->precio = 1500;
        $videojuego->disponible = true;
        $videojuego->tipoProducto_id  = 1;
        $videojuego->votacionProducto_id  = 1;
        $videojuego->cantidad = 15;
        $videojuego->save();
        $videojuego->clasificacion()->attach([1,2]);

        $videojuego = new \App\Producto();
        $videojuego->nombre = 'Chocolates Hersheys';
        $videojuego->descripcion = 'Excelente calidad';
        $videojuego->precio = 1500;
        $videojuego->disponible = true;
        $videojuego->tipoProducto_id  = 1;
        $videojuego->votacionProducto_id  = 1;
        $videojuego->cantidad = 15;
        $videojuego->save();
        $videojuego->clasificacion()->attach([1,2]);

        $videojuego = new \App\Producto();
        $videojuego->nombre = 'Chocolates Hersheys';
        $videojuego->descripcion = 'Excelente calidad';
        $videojuego->precio = 1500;
        $videojuego->disponible = true;
        $videojuego->tipoProducto_id  = 1;
        $videojuego->votacionProducto_id  = 1;
        $videojuego->cantidad = 15;
        $videojuego->save();
        $videojuego->clasificacion()->attach([1,2]);
    }
}
