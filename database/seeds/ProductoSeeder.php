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
            'urlImagen' => '/imagenes/refrescos/cocacola/cocacolaimage.jpg',
            'descripcion' => 'Coca Cola Original',
            'categoria_id' => 14,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Zero',
            'urlImagen' => '/imagenes/refrescos/cocacola/colazeroimage.jpg',
            'descripcion' => 'Coca Cola Zero',
            'categoria_id' => 14,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Light',
            'urlImagen' => '/imagenes/refrescos/cocacola/colalightimage.jpg',
            'descripcion' => 'Coca Cola Light',
            'categoria_id' => 14,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Coca Cola Sin Cafeina',
            'urlImagen' => '/imagenes/refrescos/cocacola/colazerosincafeinaimage.jpg',
            'descripcion' => 'Coca Cola Sin Caferia',
            'categoria_id' => 14,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Naranja',
            'urlImagen' => '/imagenes/refrescos/fanta/fantanaranjaimage.jpg',
            'descripcion' => 'Fanta Naranja',
            'categoria_id' => 15,
             'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fanta Limon',
            'urlImagen' => '/imagenes/refrescos/fanta/fantalimonimage.jpg',
            'descripcion' => 'Fanta Limon',
            'categoria_id' => 15,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Naranja',
            'urlImagen' => '/imagenes/refrescos/kas/kasnaranjaimage.jpg',
            'descripcion' => 'Kas Naranja',
            'categoria_id' => 16,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Kas Limon',
            'urlImagen' => '/imagenes/refrescos/kas/kaslimonimage.jpg',
            'descripcion' => 'Kas Limon',
            'categoria_id' => 16,
             'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Limon',
            'urlImagen' => '/imagenes/refrescos/schweppes/schweppeslimonimage.jpg',
            'descripcion' => 'Schweppes Limon',
            'categoria_id' => 17,
             'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Schweppes  Tonica',
            'urlImagen' => '/imagenes/refrescos/schweppes/schweppesimage.jpg',
            'descripcion' => 'Schweppes Tonica',
            'categoria_id' => 17,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Piña',
            'urlImagen' => '/imagenes/zumos/zumopiñaimage.jpg',
            'descripcion' => 'Zumo Piña',
            'categoria_id' => 20,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Zumo Melocoton',
            'urlImagen' => '/imagenes/zumos/zumomelocotonimage.jpg',
            'descripcion' => 'Zumo Melocoton',
            'categoria_id' => 20,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Fresa',
            'urlImagen' => '/imagenes/batidos/batidofresaimage.jpg',
            'descripcion' => 'Batido Fresa',
            'categoria_id' => 21,
            'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Batido Vainilla',
            'urlImagen' => '/imagenes/batidos/batidovainillaimage.jpg',
            'descripcion' => 'Batido Vainilla',
            'categoria_id' => 21,
             'precio' => 2.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal',
            'urlImagen' => '/imagenes/destilados/ron/brugalimage.png',
            'descripcion' => 'Brugal',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ron/brugalimage-coca-cola.png',
            'descripcion' => 'Brugal con Coca Cola',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ron/brugalimage-coca-cola-zero.png',
            'descripcion' => 'Brugal con Coca Cola Zero',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ron/brugalimage-fanta-naranja.png',
            'descripcion' => 'Brugal con Fanta de Naranja',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ron/brugalimage-fanta-limon.png',
            'descripcion' => 'Brugal con Fanta de Limon',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Brugal con Schweppes',
            'urlImagen' => '/imagenes/destilados/ron/brugalimage-schweppes.png',
            'descripcion' => 'Brugal con Schweppes',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo',
            'urlImagen' => '/imagenes/destilados/ron/ronbarceloimage.jpg',
            'descripcion' => 'Barcelo',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ron/ronbarceloimage-coca-cola.png',
            'descripcion' => 'Barcelo con Coca Cola',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ron/ronbarceloimage-coca-cola-zero.png',
            'descripcion' => 'Barcelo con Coca Cola Zero',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ron/ronbarceloimage-fanta-naranja.png',
            'descripcion' => 'Barcelo con Fanta de Naranja',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ron/ronbarceloimage-fanta-limon.png',
            'descripcion' => 'Barcelo con Fanta de Limon',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Barcelo con Schweppes',
            'urlImagen' => '/imagenes/destilados/ron/ronbarceloimage-schweppes.png',
            'descripcion' => 'Barcelo con Schweppes',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa',
            'urlImagen' => '/imagenes/destilados/ron/santateresaimage.jpg',
            'descripcion' => 'Santa Teresa',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ron/santateresa-coca-cola.png',
            'descripcion' => 'Santa Teresa con Coca Cola',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ron/santateresa-coca-cola-zero.png',
            'descripcion' => 'Santa Teresa con Coca Cola Zero',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa con Fanta Naranja',
            'urlImagen' => '/imagenes/destilados/ron/santateresa-fanta-naranja.png',
            'descripcion' => 'Santa Teresa con Fanta Naranja',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa con Fanta Limon',
            'urlImagen' => '/imagenes/destilados/ron/santateresa-fanta-limon.png',
            'descripcion' => 'Santa Teresa con Fanta Limon',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Santa Teresa con Schweppes',
            'urlImagen' => '/imagenes/destilados/ron/santateresa-schweppes.png',
            'descripcion' => 'Santa Teresa con Schweppes',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Red Label',
            'urlImagen' => '/imagenes/destilados/whiskey/redlabelimage.png',
            'descripcion' => 'Red Label',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Red Label con Coca Cola',
            'urlImagen' => '/imagenes/destilados/whiskey/redlabelimage-coca-cola.png',
            'descripcion' => 'Red Label con Coca Cola',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Red Label con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/whiskey/redlabelimage-coca-cola-zero.png',
            'descripcion' => 'Red Label con Coca Cola Zero',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Red Label con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/whiskey/redlabelimage-fanta-naranja.png',
            'descripcion' => 'Red Label con Fanta de Naranja',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Red Label con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/whiskey/redlabelimage-fanta-limon.png',
            'descripcion' => 'Red Label con Fanta de Limon',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Red Label con Schweppes',
            'urlImagen' => '/imagenes/destilados/whiskey/redlabelimage-schweppes.png',
            'descripcion' => 'Red Label con Schweppes',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Legendario',
            'urlImagen' => '/imagenes/destilados/ron/legendarioimage.png',
            'descripcion' => 'Legendario',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Legendario con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ron/legendarioimage-coca-cola.png',
            'descripcion' => 'Legendario con Coca Cola',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Legendario con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ron/legendarioimage-coca-cola-zero.png',
            'descripcion' => 'Legendario con Coca Cola Zero',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Legendario con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ron/legendarioimage-fanta-naranja.png',
            'descripcion' => 'Legendario con Fanta de Naranja',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Legendario con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ron/legendarioimage-fanta-limon.png',
            'descripcion' => 'Legendario con Fanta de Limon',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Legendario con Schweppes',
            'urlImagen' => '/imagenes/destilados/ron/legendarioimage-schweppes.png',
            'descripcion' => 'Legendario con Schweppes',
            'categoria_id' => 7,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB',
            'urlImagen' => '/imagenes/destilados/whiskey/jbimage.jpg',
            'descripcion' => 'JB',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB con Coca Cola',
            'urlImagen' => '/imagenes/destilados/whiskey/jbimage-coca-cola.png',
            'descripcion' => 'JB con Coca Cola',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/whiskey/jbimage-coca-cola-zero.png',
            'descripcion' => 'JB con Coca Cola Zero',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/whiskey/jbimage-fanta-naranja.png',
            'descripcion' => 'JB con Fanta de Naranja',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/whiskey/jbimage-fanta-limon.png',
            'descripcion' => 'JB con Fanta de Limon',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JB con Schweppes',
            'urlImagen' => '/imagenes/destilados/whiskey/jbimage-schweppes.png',
            'descripcion' => 'JB con Schweppes',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8',
            'urlImagen' => '/imagenes/destilados/whiskey/dyc8image.png',
            'descripcion' => 'DYC8',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8 con Coca Cola',
            'urlImagen' => '/imagenes/destilados/whiskey/dyc8image-coca-cola.png',
            'descripcion' => 'DYC8 con Coca Cola',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8 con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/whiskey/dyc8image-coca-cola-zero.png',
            'descripcion' => 'DYC8 con Coca Cola Zero',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8 con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/whiskey/dyc8image-fanta-naranja.png',
            'descripcion' => 'DYC8 con Fanta de Naranja',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8 con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/whiskey/dyc8image-fanta-limon.png',
            'descripcion' => 'DYC8 con Fanta de Limon',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'DYC8 con Schweppes',
            'urlImagen' => '/imagenes/destilados/whiskey/dyc8image-schweppes.png',
            'descripcion' => 'DYC8 con Schweppes',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Ballantines',
            'urlImagen' => '/imagenes/destilados/whiskey/ballantinesimage.png',
            'descripcion' => 'Ballantines',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Ballantines con Coca Cola',
            'urlImagen' => '/imagenes/destilados/whiskey/ballantinesimage-coca-cola.png',
            'descripcion' => 'Ballantines con Coca Cola',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Ballantines con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/whiskey/ballantinesimage-coca-cola-zero.png',
            'descripcion' => 'Ballantines con Coca Cola Zero',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Ballantines con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/whiskey/ballantinesimage-fanta-naranja.png',
            'descripcion' => 'Ballantines con Fanta de Naranja',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Ballantines con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/whiskey/ballantinesimage-fanta-limon.png',
            'descripcion' => 'Ballantines con Fanta de Limon',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Ballantines con Schweppes',
            'urlImagen' => '/imagenes/destilados/whiskey/ballantinesimage-schweppes.png',
            'descripcion' => 'Ballantines con Schweppes',
            'categoria_id' => 8,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios',
            'urlImagen' => '/imagenes/destilados/ginebra/lariosimage.jpg',
            'descripcion' => 'Larios',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ginebra/lariosimage-coca-cola.png',
            'descripcion' => 'Larios con Coca Cola',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ginebra/lariosimage-coca-cola-zero.png',
            'descripcion' => 'Larios con Coca Cola Zero',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ginebra/lariosimage-fanta-naranja.png',
            'descripcion' => 'Larios con Fanta de Naranja',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ginebra/lariosimage-fanta-limon.png',
            'descripcion' => 'Larios con Fanta de Limon',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Larios con Schweppes',
            'urlImagen' => '/imagenes/destilados/ginebra/lariosimage-schweppes.png',
            'descripcion' => 'Larios con Schweppes',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bombay Shapphire',
            'urlImagen' => '/imagenes/destilados/ginebra/bombayshapphireimage.png',
            'descripcion' => 'Bombay Shapphire',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bombay Shapphire con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ginebra/bombayshapphireimage-coca-cola.png',
            'descripcion' => 'Bombay Shapphire con Coca Cola',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bombay Shapphire con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ginebra/bombayshapphireimage-coca-cola-zero.png',
            'descripcion' => 'Bombay Shapphire con Coca Cola Zero',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bombay Shapphire con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ginebra/bombayshapphireimage-fanta-naranja.png',
            'descripcion' => 'Bombay Shapphire con Fanta de Naranja',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bombay Shapphire con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ginebra/bombayshapphireimage-fanta-limon.png',
            'descripcion' => 'Bombay Shapphire con Fanta de Limon',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bombay Shapphire con Schweppes',
            'urlImagen' => '/imagenes/destilados/ginebra/bombayshapphireimage-schweppes.png',
            'descripcion' => 'Bombay Shapphire con Schweppes',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tanqueray',
            'urlImagen' => '/imagenes/destilados/ginebra/tanquerayimage.png',
            'descripcion' => 'Tanqueray',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tanqueray con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ginebra/tanquerayimage-coca-cola.png',
            'descripcion' => 'Tanqueray con Coca Cola',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tanqueray con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ginebra/tanquerayimage-coca-cola-zero.png',
            'descripcion' => 'Tanqueray con Coca Cola Zero',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tanqueray con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ginebra/tanquerayimage-fanta-naranja.png',
            'descripcion' => 'Tanqueray con Fanta de Naranja',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tanqueray con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ginebra/tanquerayimage-fanta-limon.png',
            'descripcion' => 'Tanqueray con Fanta de Limon',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tanqueray con Schweppes',
            'urlImagen' => '/imagenes/destilados/ginebra/tanquerayimage-schweppes.png',
            'descripcion' => 'Tanqueray con Schweppes',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias',
            'urlImagen' => '/imagenes/destilados/ginebra/puertodeindiasimage.jpg',
            'descripcion' => 'Puerto de Indias',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ginebra/puertodeindiasimage-coca-cola.jpg',
            'descripcion' => 'Puerto de Indias con Coca Cola',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ginebra/puertodeindiasimage-coca-cola-zero.jpg',
            'descripcion' => 'Puerto de Indias con Coca Cola Zero',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ginebra/puertodeindiasimage-fanta-naranja.jpg',
            'descripcion' => 'Puerto de Indias con Fanta de Naranja',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ginebra/puertodeindiasimage-fanta-limon.jpg',
            'descripcion' => 'Puerto de Indias con Fanta de Limon',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Puerto de Indias con Schweppes',
            'urlImagen' => '/imagenes/destilados/ginebra/puertodeindiasimage-schweppes.jpg',
            'descripcion' => 'Puerto de Indias con Schweppes',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater',
            'urlImagen' => '/imagenes/destilados/ginebra/beefeaterimage.png',
            'descripcion' => 'Beefeater',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater con Coca Cola',
            'urlImagen' => '/imagenes/destilados/ginebra/beefeaterimage-coca-cola.png',
            'descripcion' => 'Beefeater con Coca Cola',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/ginebra/beefeaterimage-coca-cola-zero.png',
            'descripcion' => 'Beefeater con Coca Cola Zero',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/ginebra/beefeaterimage-fanta-naranja.png',
            'descripcion' => 'Beefeater con Fanta de Naranja',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/ginebra/beefeaterimage-fanta-limon.png',
            'descripcion' => 'Beefeater con Fanta de Limon',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Beefeater con Schweppes',
            'urlImagen' => '/imagenes/destilados/ginebra/beefeaterimage-schweppes.png',
            'descripcion' => 'Beefeater con Schweppes',
            'categoria_id' => 9,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere',
            'urlImagen' => '/imagenes/destilados/vodka/belvedereimage.png',
            'descripcion' => 'Belvedere',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere con Coca Cola',
            'urlImagen' => '/imagenes/destilados/vodka/belvedereimage-coca-cola.png',
            'descripcion' => 'Belvedere con Coca Cola',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/vodka/belvedereimage-coca-cola-zero.png',
            'descripcion' => 'Belvedere con Coca Cola Zero',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/vodka/belvedereimage-fanta-naranja.png',
            'descripcion' => 'Belvedere con Fanta de Naranja',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/vodka/belvedereimage-fanta-limon.png',
            'descripcion' => 'Belvedere con Fanta de Limon',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Belvedere con Schweppes',
            'urlImagen' => '/imagenes/destilados/vodka/belvedereimage-schweppes.png',
            'descripcion' => 'Belvedere con Schweppes',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut',
            'urlImagen' => '/imagenes/destilados/vodka/absolutimage.png',
            'descripcion' => 'Absolut',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut con Coca Cola',
            'urlImagen' => '/imagenes/destilados/vodka/absolutimage-cola-cola.png',
            'descripcion' => 'Absolut con Coca Cola',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/vodka/absolutimage-coca-cola-zero.png',
            'descripcion' => 'Absolut con Coca Cola Zero',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/vodka/absolutimage-fanta-naranja.png',
            'descripcion' => 'Absolut con Fanta de Naranja',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/vodka/absolutimage-fanta-limon.png',
            'descripcion' => 'Absolut con Fanta de Limon',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Absolut con Schweppes',
            'urlImagen' => '/imagenes/destilados/vodka/absolutimage-schweppes.png',
            'descripcion' => 'Absolut con Schweppes',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff',
            'urlImagen' => '/imagenes/destilados/vodka/smirnoffimage.png',
            'descripcion' => 'Smirnoff',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff con Coca Cola',
            'urlImagen' => '/imagenes/destilados/vodka/smirnoffimage-coca-cola.png',
            'descripcion' => 'Smirnoff con Coca Cola',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/vodka/smirnoffimage-coca-cola-zero.png',
            'descripcion' => 'Smirnoff con Coca Cola Zero',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/vodka/smirnoffimage-fanta-naranja.png',
            'descripcion' => 'Smirnoff con Fanta de Naranja',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/vodka/smirnoffimage-fanta-limon.png',
            'descripcion' => 'Smirnoff con Fanta de Limon',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Smirnoff con Schweppes',
            'urlImagen' => '/imagenes/destilados/vodka/smirnoffimage-schweppes.png',
            'descripcion' => 'Smirnoff con Schweppes',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Stolichnaya',
            'urlImagen' => '/imagenes/destilados/vodka/stalichnayaimage.png',
            'descripcion' => 'Stolichnaya',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Stolichnaya con Coca Cola',
            'urlImagen' => '/imagenes/destilados/vodka/stalichnayaimage-coca-cola.png',
            'descripcion' => 'Stolichnaya con Coca Cola',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Stolichnaya con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/vodka/stalichnayaimage-coca-cola-zero.png',
            'descripcion' => 'Stolichnaya con Coca Cola Zero',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Stolichnaya con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/vodka/stalichnayaimage-fanta-naranja.png',
            'descripcion' => 'Stolichnaya con Fanta de Naranja',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Stolichnaya con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/vodka/stalichnayaimage-fanta-limon.png',
            'descripcion' => 'Stolichnaya con Fanta de Limon',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Stolichnaya con Schweppes',
            'urlImagen' => '/imagenes/destilados/vodka/stalichnayaimage-schweppes.png',
            'descripcion' => 'Stolichnaya con Schweppes',
            'categoria_id' => 10,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bullet',
            'urlImagen' => '/imagenes/destilados/bourbon/bulleitimage.png',
            'descripcion' => 'Bullet',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bullet con Coca Cola',
            'urlImagen' => '/imagenes/destilados/bourbon/bulleitimage-coca-cola.png',
            'descripcion' => 'Bullet con Coca Cola',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bullet con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/bourbon/bulleitimage-coca-cola-zero.png',
            'descripcion' => 'Bullet con Coca Cola Zero',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bullet con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/bourbon/bulleitimage-fanta-naranja.png',
            'descripcion' => 'Bullet con Fanta de Naranja',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bullet con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/bourbon/bulleitimage-fanta-limon.png',
            'descripcion' => 'Bullet con Fanta de Limon',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Bullet con Schweppes',
            'urlImagen' => '/imagenes/destilados/bourbon/bulleitimage-schweppes.png',
            'descripcion' => 'Bullet con Schweppes',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fourroses',
            'urlImagen' => '/imagenes/destilados/bourbon/fourrosesimage.jpg',
            'descripcion' => 'Fourroses',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fourroses con Coca Cola',
            'urlImagen' => '/imagenes/destilados/bourbon/fourrosesimage-coca-cola.png',
            'descripcion' => 'Fourroses con Coca Cola',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fourroses con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/bourbon/fourrosesimage-coca-cola-zero.png',
            'descripcion' => 'Fourroses con Coca Cola Zero',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fourroses con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/bourbon/fourrosesimage-fanta-naranja.png',
            'descripcion' => 'Fourroses con Fanta de Naranja',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fourroses con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/bourbon/fourrosesimage-fanta-limon.png',
            'descripcion' => 'Fourroses con Fanta de Limon',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Fourroses con Schweppes',
            'urlImagen' => '/imagenes/destilados/bourbon/fourrosesimage-schweppes.png',
            'descripcion' => 'Fourroses con Schweppes',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JackDaniel',
            'urlImagen' => '/imagenes/destilados/bourbon/jackdanielimage.jpg',
            'descripcion' => 'JackDaniel',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JackDaniel con Coca Cola',
            'urlImagen' => '/imagenes/destilados/bourbon/jackdanielimage-coca-cola.png',
            'descripcion' => 'JackDaniel con Coca Cola',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JackDaniel con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/bourbon/jackdanielimage-coca-cola-zero.png',
            'descripcion' => 'JackDaniel con Coca Cola Zero',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JackDaniel con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/bourbon/jackdanielimage-fanta-naranja.png',
            'descripcion' => 'JackDaniel con Fanta de Naranja',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JackDaniel con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/bourbon/jackdanielimage-fanta-limon.png',
            'descripcion' => 'JackDaniel con Fanta de Limon',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'JackDaniel con Schweppes',
            'urlImagen' => '/imagenes/destilados/bourbon/jackdanielimage-schweppes.png',
            'descripcion' => 'JackDaniel con Schweppes',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jim Beam',
            'urlImagen' => '/imagenes/destilados/bourbon/jimbeamimage.png',
            'descripcion' => 'Jim Beam',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jim Beam con Coca Cola',
            'urlImagen' => '/imagenes/destilados/bourbon/jimbeamimage-coca-cola.png',
            'descripcion' => 'Jim Beam con Coca Cola',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jim Beam con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/bourbon/jimbeamimage-coca-cola-zero.png',
            'descripcion' => 'Jim Beam con Coca Cola Zero',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jim Beam con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/bourbon/jimbeamimage-fanta-naranja.png',
            'descripcion' => 'Jim Beam con Fanta de Naranja',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jim Beam con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/bourbon/jimbeamimage-fanta-limon.png',
            'descripcion' => 'Jim Beam con Fanta de Limon',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Jim Beam con Schweppes',
            'urlImagen' => '/imagenes/destilados/bourbon/jimbeamimage-schweppes.png',
            'descripcion' => 'Jim Beam con Schweppes',
            'categoria_id' => 11,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Martini',
            'urlImagen' => '/imagenes/destilados/licores/martiniimage.png',
            'descripcion' => 'Martini',
            'categoria_id' => 12,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Martini con Coca Cola',
            'urlImagen' => '/imagenes/destilados/licores/martiniimage-coca-cola.png',
            'descripcion' => 'Martini con Coca Cola',
            'categoria_id' => 12,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Martini con Coca Cola Zero',
            'urlImagen' => '/imagenes/destilados/licores/martiniimage-coca-cola-zero.png',
            'descripcion' => 'Martini con Coca Cola Zero',
            'categoria_id' => 12,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Martini con Fanta de Naranja',
            'urlImagen' => '/imagenes/destilados/licores/martiniimage-fanta-naranja.png',
            'descripcion' => 'Martini con Fanta de Naranja',
            'categoria_id' => 12,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Martini con Fanta de Limon',
            'urlImagen' => '/imagenes/destilados/licores/martiniimage-fanta-limon.png',
            'descripcion' => 'Martini con Fanta de Limon',
            'categoria_id' => 12,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Martini con Schweppes',
            'urlImagen' => '/imagenes/destilados/licores/martiniimage-schweppes.png',
            'descripcion' => 'Martini con Schweppes',
            'categoria_id' => 12,
            'precio' => 5.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Queso',
            'urlImagen' => '/imagenes/postres/tartadequesoimage.jpg',
            'descripcion' => 'Tarta de Queso',
            'categoria_id' => 18,
            'precio' => 3.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Crema',
            'urlImagen' => '/imagenes/postres/tartadecremaimage.jpg',
            'descripcion' => 'Tarta de Crema',
            'categoria_id' => 18,
            'precio' => 3.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Chocolate',
            'urlImagen' => '/imagenes/postres/tartachocolateimage.jpg',
            'descripcion' => 'Tarta de Chocolate',
            'categoria_id' => 18,
             'precio' => 3.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Tarta de Fresa',
            'urlImagen' => '/imagenes/postres/tartafresaimage.jpg',
            'descripcion' => 'Tarta de Fresa',
            'categoria_id' => 18,
            'precio' => 3.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Chocolate',
            'urlImagen' => '/imagenes/postres/crepechocolateimage.jpg',
            'descripcion' => 'Crepes de Chocolate',
            'categoria_id' => 19,
            'precio' => 3.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Crepes de Vainilla',
            'urlImagen' => '/imagenes/postres/crepevainillaimage.jpg',
            'descripcion' => 'Crepes de Vainilla',
            'categoria_id' => 19,
            'precio' => 3.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe con Leche',
            'urlImagen' => '/imagenes/cafes/cafeconleche.jpg',
            'descripcion' => 'Cafe con Leche',
            'categoria_id' => 23,
            'precio' => 1.30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Solo',
            'urlImagen' => '/imagenes/cafes/cafesolo.jpg',
            'descripcion' => 'Cafe Solo',
            'categoria_id' => 22,
            'precio' => 1.30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Cortado',
            'urlImagen' => '/imagenes/cafes/cafecortado.jpg',
            'descripcion' => 'Cafe Cortado',
            'categoria_id' => 25,
            'precio' => 1.30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cafe Bombon',
            'urlImagen' => '/imagenes/cafes/cafebombon.jpg',
            'descripcion' => 'Cafe Bombon',
            'categoria_id' => 24,
             'precio' => 1.50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Botella de agua',
            'urlImagen' => '/imagenes/refrescos/botelladeagua.jpg',
            'descripcion' => 'Botella de agua',
            'categoria_id' => 23,
            'precio' => 1.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cruzcampo',
            'urlImagen' => '/imagenes/cervezas/alcohol/cruzcampo.png',
            'descripcion' => 'Cruzcampo',
            'categoria_id' => 27,
            'precio' => 1.70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Amstel',
            'urlImagen' => '/imagenes/cervezas/alcohol/amstel.png',
            'descripcion' => 'Amstel',
            'categoria_id' => 27,
            'precio' => 1.70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Heineken',
            'urlImagen' => '/imagenes/cervezas/alcohol/heineken.png',
            'descripcion' => 'Heineken',
            'categoria_id' => 27,
            'precio' => 1.80,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'San Miguel',
            'urlImagen' => '/imagenes/cervezas/alcohol/san-miguel.png',
            'descripcion' => 'San Miguel',
            'categoria_id' => 27,
            'precio' => 1.70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Cruzcampo 00',
            'urlImagen' => '/imagenes/cervezas/sinalcohol/cruzcampo-00.png',
            'descripcion' => 'Cruzcampo 00',
            'categoria_id' => 28,
            'precio' => 1.70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Amstel 00',
            'urlImagen' => '/imagenes/cervezas/sinalcohol/amstel-00.png',
            'descripcion' => 'Amstel 00',
            'categoria_id' => 28,
            'precio' => 1.70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'Heineken 00',
            'urlImagen' => '/imagenes/cervezas/sinalcohol/heineken-00.png',
            'descripcion' => 'Heineken 00',
            'categoria_id' => 28,
            'precio' => 1.70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')
        ->insert([
            'nombre' => 'San Miguel 00',
            'urlImagen' => '/imagenes/cervezas/sinalcohol/san-miguel-00.png',
            'descripcion' => 'San Miguel 00',
            'categoria_id' => 28,
            'precio' => 1.70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
