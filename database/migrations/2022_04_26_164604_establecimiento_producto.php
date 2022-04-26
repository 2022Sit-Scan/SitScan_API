<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstablecimientoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimiento_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establecimiento_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->float('precio')->nullable();
            $table->timestamps();
            $table->foreign('establecimiento_id')
                    ->references('id')
                    ->on('establecimientos')->onDelete('cascade');
            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimiento_producto');
    }
}
