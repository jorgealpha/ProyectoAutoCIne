<?php

use Illuminate\Database\Seeder;

class CarteleraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videojuego = new \App\Cartelera();
        $videojuego->nombre = 'Sabado';
        $videojuego->ubicacion_id = 1;
        $videojuego->save();

        $videojuego = new \App\Cartelera();
        $videojuego->nombre = 'Sabado';
        $videojuego->ubicacion_id = 1;
        $videojuego->save();

        $videojuego = new \App\Cartelera();
        $videojuego->nombre = 'Sabado';
        $videojuego->ubicacion_id = 1;
        $videojuego->save();
    }
}
