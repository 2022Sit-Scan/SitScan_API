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
            'urlImagen' => '/imagenes/refrescos/cocacola/original',
            'descripcion' => 'Coca Cola Original',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Zero',
            'urlImagen' => '/imagenes/refrescos/cocacola/zero',
            'descripcion' => 'Coca Cola Zero',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Light',
            'urlImagen' => '/imagenes/refrescos/cocacola/light',
            'descripcion' => 'Coca Cola Light',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Sin Cafeina',
            'urlImagen' => '/imagenes/refrescos/cocacola/sincafeina',
            'descripcion' => 'Coca Cola Sin Caferia',
            'categoria_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Naranja',
            'urlImagen' => '/imagenes/refrescos/fanta/naranja',
            'descripcion' => 'Fanta Naranja',
            'categoria_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Limon',
            'urlImagen' => '/imagenes/refrescos/fanta/limon',
            'descripcion' => 'Fanta Limon',
            'categoria_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Naranja',
            'urlImagen' => '/imagenes/refrescos/kas/naranja',
            'descripcion' => 'Kas Naranja',
            'categoria_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Limon',
            'urlImagen' => '/imagenes/refrescos/kas/limon',
            'descripcion' => 'Kas Limon',
            'categoria_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Limon',
            'urlImagen' => '/imagenes/refrescos/schweppes/limon',
            'descripcion' => 'Schweppes Limon',
            'categoria_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Tonica',
            'urlImagen' => '/imagenes/refrescos/schweppes/tonica',
            'descripcion' => 'Schweppes Tonica',
            'categoria_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Piña',
            'urlImagen' => '/imagenes/zumos/piña',
            'descripcion' => 'Zumo Piña',
            'categoria_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Melocoton',
            'urlImagen' => '/imagenes/zumos/melocoton',
            'descripcion' => 'Zumo Melocoton',
            'categoria_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Fresa',
            'urlImagen' => '/imagenes/batidos/fresa',
            'descripcion' => 'Batido Fresa',
            'categoria_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Vainilla',
            'urlImagen' => '/imagenes/batidos/vainilla',
            'descripcion' => 'Batido Vainilla',
            'categoria_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal',
            'urlImagen' => '/imagenes/destilados/ron/brugalimage.jpg',
            'descripcion' => 'Brugal',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo',
            'urlImagen' => '/imagenes/destilados/ron/ronbarceloimage.jpg',
            'descripcion' => 'Barcelo',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa',
            'urlImagen' => '/imagenes/destilados/ron/santaTeresaimage.jpg',
            'descripcion' => 'Santa Teresa',
            'categoria_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Red Label',
            'urlImagen' => '/imagenes/destilados/whiskey/redlabelimage.jpg',
            'descripcion' => 'Red Label',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB',
            'urlImagen' => '/imagenes/destilados/whiskey/jbimage.jpg',
            'descripcion' => 'JB',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8',
            'urlImagen' => '/imagenes/destilados/whiskey/dyc8image.jpg',
            'descripcion' => 'DYC8',
            'categoria_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios',
            'urlImagen' => '/imagenes/destilados/ginebra/lariosimage.jg',
            'descripcion' => 'Larios',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias',
            'urlImagen' => '/imagenes/destilados/ginebra/puertodeindias.jpg',
            'descripcion' => 'Puerto de Indias',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater',
            'urlImagen' => '/imagenes/destilados/ginebra/beefeaterimage.jpg',
            'descripcion' => 'Beefeater',
            'categoria_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere',
            'urlImagen' => '/imagenes/destilados/vodka/belvedereimage.jpg',
            'descripcion' => 'Belvedere',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut',
            'urlImagen' => '/imagenes/destilados/vodka/absolutimage.jpg',
            'descripcion' => 'Absolut',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff',
            'urlImagen' => '/imagenes/destilados/vodka/smirnoffimage.jpg',
            'descripcion' => 'Smirnoff',
            'categoria_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jagermeister',
            'urlImagen' => '/imagenes/destilados/chupitos/jager',
            'descripcion' => 'Jagermeister',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jagerbomb',
            'urlImagen' => '/imagenes/destilados/chupitos/jagerbomb',
            'descripcion' => 'Jagerbomb',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'ThunderBitch',
            'urlImagen' => '/imagenes/destilados/chupitos/thunderbitch',
            'descripcion' => 'ThunderBitch',
            'categoria_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Queso',
            'urlImagen' => '/imagenes/postres/tartaquesoimage.jpg',
            'descripcion' => 'Tarta de Queso',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Crema',
            'urlImagen' => '/imagenes/postres/tartacremaimage.jpg',
            'descripcion' => 'Tarta de Crema',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Chocolate',
            'urlImagen' => '/imagenes/postres/tartachocolate',
            'descripcion' => 'Tarta de Chocolate',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Fresa',
            'urlImagen' => '/imagenes/postres/tartafresa',
            'descripcion' => 'Tarta de Fresa',
            'categoria_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Chocolate',
            'urlImagen' => '/imagenes/postres/crepeschocolate',
            'descripcion' => 'Crepes de Chocolate',
            'categoria_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Vainilla',
            'urlImagen' => '/imagenes/postres/crepesvainilla',
            'descripcion' => 'Crepes de Vainilla',
            'categoria_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe con Leche',
            'urlImagen' => '/imagenes/cafes/cafeconleche',
            'descripcion' => 'Cafe con Leche',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Solo',
            'urlImagen' => '/imagenes/cafes/cafesolo',
            'descripcion' => 'Cafe Solo',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Cortado',
            'urlImagen' => '/imagenes/cafes/cortado',
            'descripcion' => 'Cafe Cortado',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Bombon',
            'urlImagen' => '/imagenes/cafes/bombon',
            'descripcion' => 'Cafe Bombon',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe con Leche',
            'urlImagen' => '/imagenes/cafes/cafeconleche',
            'descripcion' => 'Cafe con Leche',
            'categoria_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Botella de agua',
            'urlImagen' => '/imagenes/refrescos/agua',
            'descripcion' => 'Botella de agua',
            'categoria_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
