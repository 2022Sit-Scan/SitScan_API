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
            'urlImagen' => 'alergenos/gluten',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Crustáceos',
            'urlImagen' => 'alergenos/crustaceos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Huevos',
            'urlImagen' => 'alergenos/huevos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Pescado',
            'urlImagen' => 'alergenos/pescado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Cacahuetes',
            'urlImagen' => 'alergenos/cacahuetes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Soja',
            'urlImagen' => 'alergenos/soja',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Leche',
            'urlImagen' => 'alergenos/leche',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Frutos secos',
            'urlImagen' => 'alergenos/frutossecos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Apio',
            'urlImagen' => 'alergenos/apio',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Mostaza',
            'urlImagen' => 'alergenos/mostaza',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Sesamo',
            'urlImagen' => 'alergenos/sesamo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Azufre y Sulfitos',
            'urlImagen' => 'alergenos/azufreysulfitos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Altramuces',
            'urlImagen' => 'alergenos/altramuces',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Moluscos',
            'urlImagen' => 'alergenos/moluscos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
