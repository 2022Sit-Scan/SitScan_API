<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'mesa1-1',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'mesa1-2',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'mesa1-3',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'mesa1-4',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'mesa1-5',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'mesa2-1',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'mesa2-2',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'mesa2-3',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'mesa2-4',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'mesa2-5',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'mesa3-1',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'mesa3-2',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'mesa3-3',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'mesa3-4',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'mesa3-5',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'mesa4-1',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'mesa4-2',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'mesa4-3',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'mesa4-4',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'mesa4-5',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'mesa5-1',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'mesa5-2',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'mesa5-3',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'mesa5-4',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'mesa5-5',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
