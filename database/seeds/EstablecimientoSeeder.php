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
            'urlLogo' => 'logoelviris',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 2,
            'nombre' => 'Bar Marce',
            'urlLogo' => 'logobarmarce',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 3,
            'nombre' => 'Cerveceria Espronceda',
            'urlLogo' => 'logoespronceda',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 4,
            'nombre' => 'Bar El Bosques',
            'urlLogo' => 'logobarelbosques',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 5,
            'nombre' => 'Cerveceria El Cordobés',
            'urlLogo' => 'logoelcordobes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
