<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new \App\Ticket();
        $plataforma->descripcion = 'Regular';
        $plataforma->precio = 15000;
        $plataforma->save();

        $plataforma = new \App\Ticket();
        $plataforma->descripcion = 'Regular';
        $plataforma->precio = 15000;
        $plataforma->save();

        $plataforma = new \App\Ticket();
        $plataforma->descripcion = 'Regular';
        $plataforma->precio = 15000;
        $plataforma->save();

    }
}
