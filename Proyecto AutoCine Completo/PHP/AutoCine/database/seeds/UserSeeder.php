<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        $videojuego = new \App\User();
        $videojuego->name = 'Carolina';
        $videojuego->email = 'caro.test@test.com';
        $videojuego->password = 'test1234';
        $videojuego->tipoUsuario_id = 1;
        $videojuego->save();

        $videojuego = new \App\User();
        $videojuego->name = 'Carolina';
        $videojuego->email = 'caro.test1@test.com';
        $videojuego->password = 'test1234';
        $videojuego->tipoUsuario_id = 1;
        $videojuego->save();

        $videojuego = new \App\User();
        $videojuego->name = 'Carolina';
        $videojuego->email = 'caro.test2@test.com';
        $videojuego->password = 'test1234';
        $videojuego->tipoUsuario_id = 1;
        $videojuego->save();

    }
}
