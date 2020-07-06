<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula__generos', function (Blueprint $table) {
            $table->unsignedInteger('pelicula_id');
            $table->unsignedInteger('genero_id');
            $table->foreign('pelicula_id')->references('id')->on('peliculas')
                ->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula__generos');
    }
}
