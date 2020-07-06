<?php

use Illuminate\Database\Seeder;

class ReservacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $videojuego = new \App\Reservacion();
        $videojuego->nombre = 'Usuario:';
        $videojuego->fecha = new DateTime();
        $videojuego->hora = new DateTime();
        $videojuego->precio = 1500;
        $videojuego->producto_id = 1;
        $videojuego->funcion_id = 1;
        $videojuego->disponible = true;
        $videojuego->cartelera_id  = 1;
        $videojuego->user_id  = 1;
        $videojuego->cantidadProducto = 15;
        $videojuego->cantidadTicket = 15;
        $videojuego->save();

        $videojuego = new \App\Reservacion();
        $videojuego->nombre = 'Usuario:';
        $videojuego->fecha = new DateTime();
        $videojuego->hora = new DateTime();
        $videojuego->precio = 1500;
        $videojuego->producto_id = 1;
        $videojuego->funcion_id = 1;
        $videojuego->disponible = true;
        $videojuego->cartelera_id  = 1;
        $videojuego->user_id  = 1;
        $videojuego->cantidadProducto = 15;
        $videojuego->cantidadTicket = 15;
        $videojuego->save();

        $videojuego = new \App\Reservacion();
        $videojuego->nombre = 'Usuario:';
        $videojuego->fecha = new DateTime();
        $videojuego->hora = new DateTime();
        $videojuego->precio = 1500;
        $videojuego->producto_id = 1;
        $videojuego->funcion_id = 1;
        $videojuego->disponible = true;
        $videojuego->cartelera_id  = 1;
        $videojuego->user_id  = 1;
        $videojuego->cantidadProducto = 15;
        $videojuego->cantidadTicket = 15;
        $videojuego->save();

    }
}
