<?php

use Illuminate\Database\Seeder;

class FuncionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videojuego = new \App\Funcion();
        $videojuego->nombre = 'Sabado Noche';
        $videojuego->fecha = new DateTime();
        $videojuego->hora = new DateTime();
        $videojuego->precio = 15000;
        $videojuego->pelicula_id = 1;
        $videojuego->ubicacion_id = 1;
        $videojuego->disponible = true;
        $videojuego->espacios = 30;
        $videojuego->save();
        $videojuego->Ticket()->attach([1]);

        $videojuego = new \App\Funcion();
        $videojuego->nombre = 'Sabado Noche';
        $videojuego->fecha = new DateTime();
        $videojuego->hora = new DateTime();
        $videojuego->precio = 15000;
        $videojuego->pelicula_id = 1;
        $videojuego->ubicacion_id = 1;
        $videojuego->disponible = true;
        $videojuego->espacios = 30;
        $videojuego->save();
        $videojuego->Ticket()->attach([1]);

        $videojuego = new \App\Funcion();
        $videojuego->nombre = 'Sabado Noche';
        $videojuego->fecha = new DateTime();
        $videojuego->hora = new DateTime();
        $videojuego->precio = 15000;
        $videojuego->pelicula_id = 1;
        $videojuego->ubicacion_id = 1;
        $videojuego->disponible = true;
        $videojuego->espacios = 30;
        $videojuego->save();
        $videojuego->Ticket()->attach([1]);
        
    }
}
