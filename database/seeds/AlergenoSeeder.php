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
            'urlImagen' => '/imagenes/alergenos/crustaceos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Huevos',
            'urlImagen' => '/imagenes/alergenos/huevos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Pescado',
            'urlImagen' => '/imagenes/alergenos/pescado.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Cacahuetes',
            'urlImagen' => '/imagenes/alergenos/cacahuetes.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Soja',
            'urlImagen' => '/imagenes/alergenos/soja.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Lacteos',
            'urlImagen' => '/imagenes/alergenos/lacteos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Frutos secos',
            'urlImagen' => '/imagenes/alergenos/cascara.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Apio',
            'urlImagen' => '/imagenes/alergenos/apio.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Mostaza',
            'urlImagen' => '/imagenes/alergenos/mostaza.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Sesamo',
            'urlImagen' => '/imagenes/alergenos/sesamo.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Azufre y Sulfitos',
            'urlImagen' => '/imagenes/alergenos/azufre.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Altramuces',
            'urlImagen' => '/imagenes/alergenos/altramuces.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Moluscos',
            'urlImagen' => '/imagenes/alergenos/moluscos.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
