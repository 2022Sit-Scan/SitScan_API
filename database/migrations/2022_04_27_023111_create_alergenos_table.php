<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlergenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergenos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('urlImagen');
            $table->integer('producto_id')->unsigned();
            $table->timestamps();
            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alergenos');
    }
}
