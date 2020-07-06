<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->date('fecha');
            $table->date('hora');
            $table->integer('precio');
            $table->integer('pelicula_id')->unsigned();
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->integer('ubicacion_id')->unsigned();
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
            $table->boolean('disponible')->default(false);
            $table->integer('espacios');
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
        Schema::table('funcions', function (Blueprint $table) {
            $table->dropForeign('funcions_pelicula_id_foreign');
            $table->dropForeign('funcions_ubicacion_id_foreign');
        });
        Schema::dropIfExists('funcions');
    }
}
