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
            'urlLogo' => 'logos/elviris',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 2,
            'nombre' => 'Bar Marce',
            'urlLogo' => 'logos/barmarce',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 3,
            'nombre' => 'Cerveceria Espronceda',
            'urlLogo' => 'logos/espronceda',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 4,
            'nombre' => 'Bar El Bosques',
            'urlLogo' => 'logos/barelbosques',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('establecimientos')
        ->insert([
            'id' => 5,
            'nombre' => 'Cerveceria El Cordobés',
            'urlLogo' => 'logos/elcordobes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
