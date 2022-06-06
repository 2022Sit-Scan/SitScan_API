<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Agua y refrescos',
            'urlImagen' => '/imagenes/categorias/icon_refrescos.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Zumos y batidos',
            'urlImagen' => '/imagenes/categorias/icon_zumosybatidos.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Destilados',
            'urlImagen' => '/imagenes/categorias/icon_destilados.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Cervezas',
            'urlImagen' => '/imagenes/categorias/icon_cervezas.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Cafes',
            'urlImagen' => '/imagenes/categorias/icon_cafes.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Postres',
            'urlImagen' => '/imagenes/categorias/icon_postres.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Ron',
            'urlImagen' => 'categorias/ron',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Whisky',
            'urlImagen' => 'categorias/whisky',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Ginebra',
            'urlImagen' => 'categorias/ginebra',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Vodka',
            'urlImagen' => 'categorias/Vodka',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Licores',
            'urlImagen' => 'categorias/licores',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Coca cola',
            'urlImagen' => 'categorias/cocacola',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Fanta',
            'urlImagen' => 'categorias/fanta',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Kas',
            'urlImagen' => 'categorias/kas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Schweppes',
            'urlImagen' => 'categorias/schweppes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 6,
            'nombre' => 'Tartas',
            'urlImagen' => 'categorias/tartas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 6,
            'nombre' => 'Crepes',
            'urlImagen' => 'categorias/crepes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 2,
            'nombre' => 'Zumos',
            'urlImagen' => 'categorias/zumos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 2,
            'nombre' => 'Batidos',
            'urlImagen' => 'categorias/batidos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 5,
            'nombre' => 'Solo',
            'urlImagen' => 'categorias/solo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Agua',
            'urlImagen' => 'categorias/agua',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}