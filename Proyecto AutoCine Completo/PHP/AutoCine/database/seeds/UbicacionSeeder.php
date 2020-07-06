<?php

use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\Ubicacion();
        $plataforma->nombre = 'Alajuela';
        $plataforma->direccion = 'San Pedro de Poas';
        $plataforma->save();

        $plataforma = new \App\Ubicacion();
        $plataforma->nombre = 'Alajuela';
        $plataforma->direccion = 'San Pedro de Poas';
        $plataforma->save();

        $plataforma = new \App\Ubicacion();
        $plataforma->nombre = 'Alajuela';
        $plataforma->direccion = 'San Pedro de Poas';
        $plataforma->save();
    }
}
