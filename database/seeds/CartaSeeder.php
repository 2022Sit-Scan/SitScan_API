<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cartas')
        ->insert([
            'id' => 1,
            'nombre' => 'Carta Elviris',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cartas')
        ->insert([
            'id' => 2,
            'nombre' => 'Carta Bar Marce',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cartas')
        ->insert([
            'id' => 3,
            'nombre' => 'Carta Cerveceria Espronceda',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cartas')
        ->insert([
            'id' => 4,
            'nombre' => 'Carta Bar El Bosques',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cartas')
        ->insert([
            'id' => 5,
            'nombre' => 'Carta Cerveceria El Cordobes',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
