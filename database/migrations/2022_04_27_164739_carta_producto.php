<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carta_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->float('precio')->nullable();
            $table->timestamps();
            $table->foreign('carta_id')
                    ->references('id')
                    ->on('cartas')->onDelete('cascade');
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
        Schema::dropIfExists('carta_producto');
    }
}
