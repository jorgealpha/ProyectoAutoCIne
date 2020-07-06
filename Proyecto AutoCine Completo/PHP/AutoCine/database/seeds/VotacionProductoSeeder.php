<?php

use Illuminate\Database\Seeder;

class VotacionProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\votacionProducto();
        $plataforma->calificacion = 'Excelente';
        $plataforma->descripcion = 'Sobrepasa expectativas';
        $plataforma->save();

        $plataforma = new \App\votacionProducto();
        $plataforma->calificacion = 'Excelente';
        $plataforma->descripcion = 'Sobrepasa expectativas';
        $plataforma->save();

        $plataforma = new \App\votacionProducto();
        $plataforma->calificacion = 'Excelente';
        $plataforma->descripcion = 'Sobrepasa expectativas';
        $plataforma->save();
    }
}
