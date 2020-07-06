<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('sinopsis')->nullable();
            $table->boolean('disponible')->default(false);
            $table->integer('votacionPelicula_id')->unsigned();
            $table->foreign('votacionPelicula_id')->references('id')->on('votacion_peliculas');
            $table->integer('clasificacionPelicula_id')->unsigned();
            $table->foreign('clasificacionPelicula_id')->references('id')->on('clasificacion_peliculas');
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
        Schema::table('peliculas', function (Blueprint $table) {
            $table->dropForeign('peliculas_votacionPelicula_id_foreign');
            $table->dropForeign('peliculas_clasificacionPelicula_id_foreign');
        });
        Schema::dropIfExists('peliculas');
    }
}
