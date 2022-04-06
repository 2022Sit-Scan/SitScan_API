<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establecimiento_id');
            $table->integer('producto_id');
            $table->integer('mesa_id');
            $table->boolean('estado');
            $table->string('nombreCliente')->nullable();
            $table->timestamps();
            $table->foreign('establecimiento_id')
                    ->references('id')
                    ->on('establecimeientos');
            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos');
            $table->foreign('mesa_id')
                    ->references('id')
                    ->on('mesas');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
