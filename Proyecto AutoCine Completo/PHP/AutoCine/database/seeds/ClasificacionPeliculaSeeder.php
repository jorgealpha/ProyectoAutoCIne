<?php

use Illuminate\Database\Seeder;

class ClasificacionPeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\clasificacionPelicula();
        $plataforma->nombre = 'Familiar';
        $plataforma->descripcion = 'Disponible para niños y toda la familia';
        $plataforma->save();

        $plataforma = new \App\clasificacionPelicula();
        $plataforma->nombre = 'Familiar';
        $plataforma->descripcion = 'Disponible para niños y toda la familia';
        $plataforma->save();

        $plataforma = new \App\clasificacionPelicula();
        $plataforma->nombre = 'Familiar';
        $plataforma->descripcion = 'Disponible para niños y toda la familia';
        $plataforma->save();

        $plataforma = new \App\clasificacionPelicula();
        $plataforma->nombre = 'Familiar';
        $plataforma->descripcion = 'Disponible para niños y toda la familia';
        $plataforma->save();


    }
}
