<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')
        ->insert([
            'email' => 'roberto@escuelaestech.es',
            'establecimiento_id'=>1,
            'password' => bcrypt('laravel'),
            'rol'=>'ADMINISTRADOR',
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@elviris.com',
            'password' => bcrypt('elviris'),
            'rol'=>'GERENTE',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@elviris.com',
            'password' => bcrypt('elviris'),
            'rol'=>'CAMARERO',
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@barmarce.com',
            'password' => bcrypt('barmarce'),
            'establecimiento_id' => 2,
            'rol'=>'GERENTE',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@barmarce.com',
            'password' => bcrypt('barmarce'),
            'rol'=>'CAMARERO',
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@espronceda.com',
            'password' => bcrypt('espronceda'),
            'rol'=>'GERENTE',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@espronceda.com',
            'password' => bcrypt('espronceda'),
            'rol'=>'CAMARERO',
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@barelbosques.com',
            'password' => bcrypt('barelbosques'),
            'rol'=>'GERENTE',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@barelbosques.com',
            'password' => bcrypt('barelbosques'),
            'rol'=>'CAMARERO',
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@elcordobes.com',
            'password' => bcrypt('elcordobes'),
            'rol'=>'GERENTE',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@elcordobes.com',
            'password' => bcrypt('elcordobes'),
            'rol'=>'CAMARERO',
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
