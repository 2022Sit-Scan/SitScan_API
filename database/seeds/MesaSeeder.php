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
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/1/1',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/1/2',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/1/3',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/1/4',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/1/5',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/2/6',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/2/7',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/2/8',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/2/9',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/2/10',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/3/11',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/3/12',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/3/13',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/3/14',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/3/15',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/4/16',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/4/17',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/4/18',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/4/19',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/4/20',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 1,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/5/21',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 2,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/5/22',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 3,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/5/23',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 4,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/5/24',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mesas')
        ->insert([
            'numero_mesa' => 5,
            'codigoQR' => 'http://35.181.160.138/proyectos/SitScan_API/public/5/25',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
