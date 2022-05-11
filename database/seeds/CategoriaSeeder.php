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
            'urlImagen' => 'aguayrefrescosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Zumos y batidos',
            'urlImagen' => 'zumosybatidosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Destilados',
            'urlImagen' => 'destiladosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Cervezas',
            'urlImagen' => 'cervezasimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Cafes',
            'urlImagen' => 'cafesimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => null,
            'nombre' => 'Postres',
            'urlImagen' => 'postresimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Ron',
            'urlImagen' => 'ronimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Whisky',
            'urlImagen' => 'whiskyimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Ginegra',
            'urlImagen' => 'ginebraimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Vodka',
            'urlImagen' => 'Vodkaimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 3,
            'nombre' => 'Licores',
            'urlImagen' => 'licoresimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Coca cola',
            'urlImagen' => 'cocacolaimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Fanta',
            'urlImagen' => 'fantaimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Kas',
            'urlImagen' => 'kasimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Schweppes',
            'urlImagen' => 'schweppesimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 6,
            'nombre' => 'Tartas',
            'urlImagen' => 'tartasimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 6,
            'nombre' => 'Crepes',
            'urlImagen' => 'crepesimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 2,
            'nombre' => 'Zumos',
            'urlImagen' => 'zumosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 2,
            'nombre' => 'Batidos',
            'urlImagen' => 'batidosimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Solo',
            'urlImagen' => 'soloimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')
        ->insert([
            'categoriaPadre' => 1,
            'nombre' => 'Agua',
            'urlImagen' => 'aguaimage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}