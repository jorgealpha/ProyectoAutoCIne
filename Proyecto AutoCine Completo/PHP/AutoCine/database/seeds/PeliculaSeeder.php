<?php

use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $videojuego = new \App\Pelicula();
        $videojuego->nombre = 'I Am Leyend';
        $videojuego->sinopsis = 'Best movie from Will Smith';
        $videojuego->disponible = true;
        $videojuego->votacionPelicula_id = 1;
        $videojuego->clasificacionPelicula_id = 1;
        $videojuego->save();

        $videojuego = new \App\Pelicula();
        $videojuego->nombre = 'I Am Leyend';
        $videojuego->sinopsis = 'Best movie from Will Smith';
        $videojuego->disponible = true;
        $videojuego->votacionPelicula_id = 1;
        $videojuego->clasificacionPelicula_id = 1;
        $videojuego->save();

        $videojuego = new \App\Pelicula();
        $videojuego->nombre = 'I Am Leyend';
        $videojuego->sinopsis = 'Best movie from Will Smith';
        $videojuego->disponible = true;
        $videojuego->votacionPelicula_id = 1;
        $videojuego->clasificacionPelicula_id = 1;
        $videojuego->save();
        
        
    }
}
