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
            'email' => 'gerente@elviris.com',
            'password' => bcrypt('elviris'),
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@elviris.com',
            'password' => bcrypt('elviris'),
            'establecimiento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@barmarce.com',
            'password' => bcrypt('barmarce'),
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@barmarce.com',
            'password' => bcrypt('barmarce'),
            'establecimiento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@espronceda.com',
            'password' => bcrypt('espronceda'),
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@espronceda.com',
            'password' => bcrypt('espronceda'),
            'establecimiento_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@barelbosques.com',
            'password' => bcrypt('barelbosques'),
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@barelbosques.com',
            'password' => bcrypt('barelbosques'),
            'establecimiento_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'gerente@elcordobes.com',
            'password' => bcrypt('elcordobes'),
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')
        ->insert([
            'email' => 'camarero@elcordobes.com',
            'password' => bcrypt('elcordobes'),
            'establecimiento_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
