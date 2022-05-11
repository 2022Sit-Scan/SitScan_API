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
            'urlImagen' => 'glutenimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Crustáceos',
            'urlImagen' => 'crustaceosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Huevos',
            'urlImagen' => 'huevosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Pescado',
            'urlImagen' => 'pescadoimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Cacahuetes',
            'urlImagen' => 'cacahuetesimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Soja',
            'urlImagen' => 'sojaimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Leche',
            'urlImagen' => 'lecheimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Frutos secos',
            'urlImagen' => 'frutossecosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Apio',
            'urlImagen' => 'apioimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Mostaza',
            'urlImagen' => 'mostazaimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Sesamo',
            'urlImagen' => 'sesamoimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Azufre y Sulfitos',
            'urlImagen' => 'azufreysulfitosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Altramuces',
            'urlImagen' => 'altramucesimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('alergenos')
        ->insert([
            'nombre' => 'Moluscos',
            'urlImagen' => 'moluscosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
