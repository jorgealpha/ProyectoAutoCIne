<?php

use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\clasificacion();
        $plataforma->nombre = 'Snacks';
        $plataforma->descripcion = 'Productos varios ideales para una comida ligera y deliciosa';
        $plataforma->save();

        $plataforma = new \App\clasificacion();
        $plataforma->nombre = 'Snacks';
        $plataforma->descripcion = 'Productos varios ideales para una comida ligera y deliciosa';
        $plataforma->save();

        $plataforma = new \App\clasificacion();
        $plataforma->nombre = 'Snacks';
        $plataforma->descripcion = 'Productos varios ideales para una comida ligera y deliciosa';
        $plataforma->save();

        $plataforma = new \App\clasificacion();
        $plataforma->nombre = 'Snacks';
        $plataforma->descripcion = 'Productos varios ideales para una comida ligera y deliciosa';
        $plataforma->save();

        
    }
}
