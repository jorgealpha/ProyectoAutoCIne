<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->integer('precio');
            $table->boolean('disponible')->default(false);
            $table->integer('tipoProducto_id')->unsigned();
            $table->foreign('tipoProducto_id')->references('id')->on('tipo_productos');
            $table->integer('votacionProducto_id')->unsigned();
            $table->foreign('votacionProducto_id')->references('id')->on('votacion_productos');
            $table->integer('cantidad');
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
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('productos_tipoProducto_id_foreign');
            $table->dropForeign('productos_votacion_id_foreign');
        });
        Schema::dropIfExists('productos');
    }
}
