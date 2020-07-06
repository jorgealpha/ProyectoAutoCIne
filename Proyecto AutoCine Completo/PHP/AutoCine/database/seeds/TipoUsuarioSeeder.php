<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\tipoUsuario();
        $plataforma->nombre = 'Administrador';
        $plataforma->descripcion = 'Tiene acceso a todas las funcionalidades';
        $plataforma->save();

        $plataforma = new \App\tipoUsuario();
        $plataforma->nombre = 'Administrador';
        $plataforma->descripcion = 'Tiene acceso a todas las funcionalidades';
        $plataforma->save();

        $plataforma = new \App\tipoUsuario();
        $plataforma->nombre = 'Administrador';
        $plataforma->descripcion = 'Tiene acceso a todas las funcionalidades';
        $plataforma->save();
    }
}
