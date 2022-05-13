<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedidoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->integer('establecimiento_id')->unsigned();
            $table->integer('mesa_id')->unsigned();
            $table->timestamps();

            $table->foreign('pedido_id')
                    ->references('id')
                    ->on('pedidos')->onDelete('cascade');
            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos')->onDelete('cascade');
            $table->foreign('establecimiento_id')
                  ->references('id')
                  ->on('establecimientos')->onDelete('cascade');
            $table->foreign('mesa_id')
                  ->references('id')
                  ->on('mesas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_producto');
    }
}
