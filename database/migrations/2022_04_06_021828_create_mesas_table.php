<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id('mesa_id'); //preguntar como elegir la columna que quiero que sea id y en users para que sea email
            $table->string('mesa_id');
            $table->String('numero_mesa');
            $table->String('codigoQR');
            $table->integer('establecimiento_id');
            $table->timestamps();
            $table->foreign('establecimiento_id')
                    ->references('id')
                    ->on('establecimeientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesas');
    }
}
