<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establecimientos')
        ->insert([
            'id' => 1,
            'nombre' => 'Elviris',
            'urlLogo' => './imagenes/logos/elviris.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 2,
            'nombre' => 'Bar Marce',
            'urlLogo' => './imagenes/logos/barmarce.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 3,
            'nombre' => 'Cerveceria Espronceda',
            'urlLogo' => './imagenes/logos/espronceda.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 4,
            'nombre' => 'Bar El Bosques',
            'urlLogo' => './imagenes/logos/elbosque.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 5,
            'nombre' => 'Cerveceria El Cordobés',
            'urlLogo' => './imagenes/logos/elcordobes.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
