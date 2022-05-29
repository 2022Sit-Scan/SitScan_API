<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlergenoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alergenos')
        ->insert([
            'nombre' => 'Gluten',
            'urlImagen' => '/imagenes/alergenos/gluten.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Crustáceos',
            'urlImagen' => 'alergenos/crustaceos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Huevos',
            'urlImagen' => 'alergenos/huevos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Pescado',
            'urlImagen' => 'alergenos/pescado.sv',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Cacahuetes',
            'urlImagen' => 'alergenos/cacahuetes.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Soja',
            'urlImagen' => 'alergenos/soja.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Lacteos',
            'urlImagen' => 'alergenos/lacteos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Frutos secos',
            'urlImagen' => 'alergenos/cascara.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Apio',
            'urlImagen' => 'alergenos/apio.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Mostaza',
            'urlImagen' => 'alergenos/mostaza.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Sesamo',
            'urlImagen' => 'alergenos/sesamo.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Azufre y Sulfitos',
            'urlImagen' => 'alergenos/azufre.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Altramuces',
            'urlImagen' => 'alergenos/altramuces.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Moluscos',
            'urlImagen' => 'alergenos/moluscos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
