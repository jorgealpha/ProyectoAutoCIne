<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoClasificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacion_producto', function (Blueprint $table) {
            $table->unsignedInteger('producto_id');
            $table->unsignedInteger('clasificacion_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('clasificacion_id')->references('id')->on('clasificacions');
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
        Schema::table('clasificacion_producto', function (Blueprint $table) {
            $table->dropForeign('clasificacion_producto_clasificacion_id_foreing');
            $table->dropForeign('clasificacion_producto_producto_id_foreing');
        });
        Schema::dropIfExists('clasificacion_producto');
    }
}
