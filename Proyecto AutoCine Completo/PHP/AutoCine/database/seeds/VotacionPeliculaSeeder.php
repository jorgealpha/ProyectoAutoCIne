<?php

use Illuminate\Database\Seeder;

class VotacionPeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\votacionPelicula();
        $plataforma->nombre = 'Excelente';
        $plataforma->descripcion = 'Sobrepasa expectativas';
        $plataforma->save();

        $plataforma = new \App\votacionPelicula();
        $plataforma->nombre = 'Excelente';
        $plataforma->descripcion = 'Sobrepasa expectativas';
        $plataforma->save();

        $plataforma = new \App\votacionPelicula();
        $plataforma->nombre = 'Excelente';
        $plataforma->descripcion = 'Sobrepasa expectativas';
        $plataforma->save();
    }
}
