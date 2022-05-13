<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class PedidoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 1,
            'producto_id' => 1,
            'establecimiento_id' => 1,
            'mesa_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 2,
            'producto_id' => 1,
            'establecimiento_id' => 1,
            'mesa_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 1,
            'producto_id' => 27,
            'establecimiento_id' => 1,
            'mesa_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 1,
            'producto_id' => 41,
            'establecimiento_id' => 1,
            'mesa_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 3,
            'producto_id' => 23,
            'establecimiento_id' => 2,
            'mesa_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 3,
            'producto_id' => 18,
            'establecimiento_id' => 2,
            'mesa_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 1,
            'producto_id' => 15,
            'establecimiento_id' => 5,
            'mesa_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 5,
            'producto_id' => 1,
            'establecimiento_id' => 1,
            'mesa_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 1,
            'producto_id' => 30,
            'establecimiento_id' => 4,
            'mesa_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 2,
            'producto_id' => 22,
            'establecimiento_id' => 4,
            'mesa_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 3,
            'producto_id' => 1,
            'establecimiento_id' => 4,
            'mesa_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 2,
            'producto_id' => 40,
            'establecimiento_id' => 5,
            'mesa_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 2,
            'producto_id' => 20,
            'establecimiento_id' => 5,
            'mesa_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 2,
            'producto_id' => 25,
            'establecimiento_id' => 5,
            'mesa_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido_producto')
        ->insert([
            'pedido_id' => 3,
            'producto_id' => 14,
            'establecimiento_id' => 5,
            'mesa_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
