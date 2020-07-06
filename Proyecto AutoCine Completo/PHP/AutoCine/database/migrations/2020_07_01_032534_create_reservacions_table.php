<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->date('fecha');
            $table->date('hora');
            $table->integer('precio');
            $table->boolean('disponible')->default(false);
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->integer('funcion_id')->unsigned();
            $table->foreign('funcion_id')->references('id')->on('funcions');
            $table->integer('cartelera_id')->unsigned();
            $table->foreign('cartelera_id')->references('id')->on('carteleras');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('cantidadProducto');
            $table->integer('cantidadTicket');
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
        Schema::table('reservacions', function (Blueprint $table) {
            $table->dropForeign('reservacions_producto_id_foreign');
            $table->dropForeign('reservacions_funcion_id_foreign');
            $table->dropForeign('reservacions_cartelera_id_foreign');
            $table->dropForeign('reservacions_user_id_foreign');
        });
        Schema::dropIfExists('reservacions');
    }
}
