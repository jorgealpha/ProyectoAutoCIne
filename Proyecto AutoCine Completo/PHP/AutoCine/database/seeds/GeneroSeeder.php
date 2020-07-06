<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\Genero();
        $plataforma->nombre = 'Comedia';
        $plataforma->descripcion = 'Ideal para un rato de risas y diversion';
        $plataforma->save();

        $plataforma = new \App\Genero();
        $plataforma->nombre = 'Comedia';
        $plataforma->descripcion = 'Ideal para un rato de risas y diversion';
        $plataforma->save();

        $plataforma = new \App\Genero();
        $plataforma->nombre = 'Comedia';
        $plataforma->descripcion = 'Ideal para un rato de risas y diversion';
        $plataforma->save();

        $plataforma = new \App\Genero();
        $plataforma->nombre = 'Comedia';
        $plataforma->descripcion = 'Ideal para un rato de risas y diversion';
        $plataforma->save();
    }
}
