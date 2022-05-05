<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlergenoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergeno_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->integer('alergeno_id')->unsigned();
            $table->timestamps();
            $table->foreign('alergeno_id')
                    ->references('id')
                    ->on('alergenos')->onDelete('cascade');
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
        Schema::dropIfExists('alergeno_producto');
    }
}
