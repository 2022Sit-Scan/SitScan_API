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
            'urlImagen' => 'refrescos/cocacola/original',
            'descripcion' => 'Coca Cola Original',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Zero',
            'urlImagen' => 'refrescos/cocacola/zero',
            'descripcion' => 'Coca Cola Zero',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Light',
            'urlImagen' => 'refrescos/cocacola/light',
            'descripcion' => 'Coca Cola Light',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Sin Cafeina',
            'urlImagen' => 'refrescos/cocacola/sincafeina',
            'descripcion' => 'Coca Cola Sin Caferia',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Naranja',
            'urlImagen' => 'refrescos/fanta/naranja',
            'descripcion' => 'Fanta Naranja',
            'categoria_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Limon',
            'urlImagen' => 'refrescos/fanta/limon',
            'descripcion' => 'Fanta Limon',
            'categoria_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Naranja',
            'urlImagen' => 'refrescos/kas/naranja',
            'descripcion' => 'Kas Naranja',
            'categoria_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Limon',
            'urlImagen' => 'refrescos/kas/limon',
            'descripcion' => 'Kas Limon',
            'categoria_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Limon',
            'urlImagen' => 'refrescos/schweppes/limon',
            'descripcion' => 'Schweppes Limon',
            'categoria_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Tonica',
            'urlImagen' => 'refrescos/schweppes/tonica',
            'descripcion' => 'Schweppes Tonica',
            'categoria_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Piña',
            'urlImagen' => 'zumos/piña',
            'descripcion' => 'Zumo Piña',
            'categoria_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Melocoton',
            'urlImagen' => 'zumos/melocoton',
            'descripcion' => 'Zumo Melocoton',
            'categoria_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Fresa',
            'urlImagen' => 'batidos/fresa',
            'descripcion' => 'Batido Fresa',
            'categoria_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Vainilla',
            'urlImagen' => 'batidos/vainilla',
            'descripcion' => 'Batido Vainilla',
            'categoria_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal',
            'urlImagen' => 'destilados/ron/brugal',
            'descripcion' => 'Brugal',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo',
            'urlImagen' => 'destilados/ron/barcelo',
            'descripcion' => 'Barcelo',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa',
            'urlImagen' => 'destilados/ron/santateresa',
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
            'urlImagen' => 'destilados/whisky/jb',
            'descripcion' => 'JB',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8',
            'urlImagen' => 'destilados/whisky/dyc8',
            'descripcion' => 'DYC8',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios',
            'urlImagen' => 'destilados/ginebra/larios',
            'descripcion' => 'Larios',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias',
            'urlImagen' => 'destilados/ginebra/puerto',
            'descripcion' => 'Puerto de Indias',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater',
            'urlImagen' => 'destilados/ginebra/beefeater',
            'descripcion' => 'Beefeater',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere',
            'urlImagen' => 'destilados/vodka/belvedere',
            'descripcion' => 'Belvedere',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut',
            'urlImagen' => 'destilados/vodka/absolut',
            'descripcion' => 'Absolut',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff',
            'urlImagen' => 'destilados/vodka/smirnoff',
            'descripcion' => 'Smirnoff',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jagermeister',
            'urlImagen' => 'destilados/chupitos/jager',
            'descripcion' => 'Jagermeister',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jagerbomb',
            'urlImagen' => 'destilados/chupitos/jagerbomb',
            'descripcion' => 'Jagerbomb',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'ThunderBitch',
            'urlImagen' => 'destilados/chupitos/thunderbitch',
            'descripcion' => 'ThunderBitch',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Queso',
            'urlImagen' => 'postres/tartaqueso',
            'descripcion' => 'Tarta de Queso',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Crema',
            'urlImagen' => 'postres/tartacrema',
            'descripcion' => 'Tarta de Crema',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Chocolate',
            'urlImagen' => 'postres/tartachocolate',
            'descripcion' => 'Tarta de Chocolate',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Fresa',
            'urlImagen' => 'postres/tartafresa',
            'descripcion' => 'Tarta de Fresa',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Chocolate',
            'urlImagen' => 'postres/crepeschocolate',
            'descripcion' => 'Crepes de Chocolate',
            'categoria_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Vainilla',
            'urlImagen' => 'postres/crepesvainilla',
            'descripcion' => 'Crepes de Vainilla',
            'categoria_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe con Leche',
            'urlImagen' => 'cafes/cafeconleche',
            'descripcion' => 'Cafe con Leche',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Solo',
            'urlImagen' => 'cafes/cafesolo',
            'descripcion' => 'Cafe Solo',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Cortado',
            'urlImagen' => 'cafes/cortado',
            'descripcion' => 'Cafe Cortado',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Bombon',
            'urlImagen' => 'cafes/bombon',
            'descripcion' => 'Cafe Bombon',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe con Leche',
            'urlImagen' => 'cafes/cafeconleche',
            'descripcion' => 'Cafe con Leche',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Botella de agua',
            'urlImagen' => 'refrescos/agua',
            'descripcion' => 'Botella de agua',
            'categoria_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
