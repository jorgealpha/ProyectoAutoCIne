<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UbicacionSeeder::class);
        $this->call(CarteleraSeeder::class);
        $this->call(ClasificacionPeliculaSeeder::class);
        $this->call(ClasificacionSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(VotacionPeliculaSeeder::class);
        $this->call(PeliculaSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(FuncionSeeder::class);
        $this->call(VotacionProductoSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoProductoSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(ReservacionSeeder::class);
        
        
        
        
    }
}
