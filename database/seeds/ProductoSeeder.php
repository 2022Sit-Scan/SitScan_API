<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Original',
            'urlImagen' => 'colaoriginalimagen',
            'descripcion' => 'Coca Cola Original',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Zero',
            'urlImagen' => 'colazeroimagen',
            'descripcion' => 'Coca Cola Zero',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Light',
            'urlImagen' => 'colalightimage',
            'descripcion' => 'Coca Cola Light',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Sin Cafeina',
            'urlImagen' => 'colasincafeinaimage',
            'descripcion' => 'Coca Cola Sin Caferia',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Naranja',
            'urlImagen' => 'fantanaranjaimage',
            'descripcion' => 'Fanta Naranja',
            'categoria_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Limon',
            'urlImagen' => 'fantalimonimage',
            'descripcion' => 'Fanta Limon',
            'categoria_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Naranja',
            'urlImagen' => 'kasnaranjaimage',
            'descripcion' => 'Kas Naranja',
            'categoria_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Limon',
            'urlImagen' => 'kaslimonimage',
            'descripcion' => 'Kas Limon',
            'categoria_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Limon',
            'urlImagen' => 'schweppeslimonimage',
            'descripcion' => 'Schweppes Limon',
            'categoria_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Tonica',
            'urlImagen' => 'schweppestonicaimage',
            'descripcion' => 'Schweppes Tonica',
            'categoria_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Piña',
            'urlImagen' => 'zumopiñaimage',
            'descripcion' => 'Zumo Piña',
            'categoria_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Melocoton',
            'urlImagen' => 'zumomolocolonimage',
            'descripcion' => 'Zumo Melocoton',
            'categoria_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Fresa',
            'urlImagen' => 'batidofresaimage',
            'descripcion' => 'Batido Fresa',
            'categoria_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Vainilla',
            'urlImagen' => 'batidovainillaimage',
            'descripcion' => 'Batido Vainilla',
            'categoria_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal',
            'urlImagen' => 'brugalimage',
            'descripcion' => 'Brugal',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo',
            'urlImagen' => 'barceloimage',
            'descripcion' => 'Barcelo',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa',
            'urlImagen' => 'santateresaimage',
            'descripcion' => 'Santa Teresa',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jhonnie Walker',
            'urlImagen' => 'jhonniewalkerimage',
            'descripcion' => 'Jhonnie Walker',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB',
            'urlImagen' => 'jbimage',
            'descripcion' => 'JB',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8',
            'urlImagen' => 'dyc8image',
            'descripcion' => 'DYC8',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios',
            'urlImagen' => 'lariosimage',
            'descripcion' => 'Larios',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias',
            'urlImagen' => 'puertodeindiasimage',
            'descripcion' => 'Puerto de Indias',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater',
            'urlImagen' => 'beefeaterimage',
            'descripcion' => 'Beefeater',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere',
            'urlImagen' => 'belvedereimage',
            'descripcion' => 'Belvedere',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut',
            'urlImagen' => 'absolutimage',
            'descripcion' => 'Absolut',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff',
            'urlImagen' => 'smirnoffimage',
            'descripcion' => 'Smirnoff',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jagermeister',
            'urlImagen' => 'jagermeisterimage',
            'descripcion' => 'Jagermeister',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jagerbomb',
            'urlImagen' => 'jagerbombimage',
            'descripcion' => 'Jagerbomb',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'ThunderBitch',
            'urlImagen' => 'thunderbitchimage',
            'descripcion' => 'ThunderBitch',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Manzana',
            'urlImagen' => 'tartamanzanaimage',
            'descripcion' => 'Tarta de Manzana',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Limon',
            'urlImagen' => 'tartalimonimage',
            'descripcion' => 'Tarta de Limon',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Chocolate',
            'urlImagen' => 'tartachocolateimage',
            'descripcion' => 'Tarta de Chocolate',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Fresa',
            'urlImagen' => 'tartafresaimage',
            'descripcion' => 'Tarta de Fresa',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Chocolate',
            'urlImagen' => 'crepesdechocolateimage',
            'descripcion' => 'Crepes de Chocolate',
            'categoria_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Vainilla',
            'urlImagen' => 'crepesdevainillaimage',
            'descripcion' => 'Crepes de Vainilla',
            'categoria_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe con Leche',
            'urlImagen' => 'cafeconlecheimage',
            'descripcion' => 'Cafe con Leche',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Solo',
            'urlImagen' => 'cafesoloimage',
            'descripcion' => 'Cafe Solo',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Cortado',
            'urlImagen' => 'cafecortadoimage',
            'descripcion' => 'Cafe Cortado',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Bombon',
            'urlImagen' => 'cafebombonimage',
            'descripcion' => 'Cafe Bombon',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe con Leche',
            'urlImagen' => 'cafeconlecheimage',
            'descripcion' => 'Cafe con Leche',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Botella de agua',
            'urlImagen' => 'botelladeaguaimage',
            'descripcion' => 'Botella de agua',
            'categoria_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
