<?php

use App\Models\Mesa;
use App\Models\Carta;
use App\Models\Pedido;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Alergeno;
use App\Models\Producto;
use App\Models\Establecimiento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Alergeno::truncate();
        Carta::truncate();
        Categoria::truncate();
        Establecimiento::truncate();
        Mesa::truncate();
        Pedido::truncate();
        Producto::truncate();
        Usuario::truncate();
        DB::table('establecimiento_producto')->truncate();
        DB::table('pedido_producto')->truncate();
        DB::table('carta_producto')->truncate();
        DB::table('alergeno_producto')->truncate();

        //crea 20 usuarios
        $cantUsuarios = 20;
        factory(Usuario::class,$cantUsuarios)->create();
        

        //crea 10 establecimientos
        $cantEstablecimientos = 10;
        factory(Establecimiento::class,$cantEstablecimientos)->create();

         //crea 100 mesas
         $cantMesas = 100;
         factory(Mesa::class,$cantMesas)->create();

         //crea 10 cartas
         $cantCartas = 10;
         factory(Carta::class,$cantCartas)->create();

          //crea 1000 productos
          $cantProductos = 1000;
          factory(Producto::class,$cantProductos)->create();

          //crea 100 pedidos
          $cantPedidos = 100;
          factory(Pedido::class,$cantPedidos)->create();

           //crea 40 categorias
           $cantCategorias = 40;
           factory(Categoria::class,$cantCategorias)->create();
 

          //crea 10 alergenos
          $cantAlergenos = 10;
          factory(Alergeno::class,$cantAlergenos)->create();
 
         
        //crea 30 productos por establecimiento (precio)
        $productos_establecimiento=30;
        for ($i=0; $i<$productos_establecimiento;$i++)
        {
            $producto = Producto::all()->random();
            $establecimiento = Establecimiento::all()->random()->id;
            $producto->establecimientos()->attach($establecimiento);

           // ->each()->insert(['precio'=>mt_rand(2.5,10.5,'00')])
        }

         //crea 30 productos por establecimiento
         $pedidos_establecimiento=30;
         for ($i=0; $i<$pedidos_establecimiento;$i++)
         {
             $producto = Producto::all()->random();
             $establecimiento = Establecimiento::all()->random()->id;
             $producto->establecimientos()->attach($establecimiento);
         }

          //crea 30 productos por carta
        $productos_carta =30;
        for ($i=0; $i<$productos_carta;$i++)
        {
            $producto = Producto::all()->random();
            $carta = Carta::all()->random()->id;
            $producto->cartas()->attach($carta);
        }

        //crea 5 alergenos por producto
        $alergenos_producto =5;

        for ($i=0; $i<$alergenos_producto;$i++)
        {
            $producto = Producto::all()->random()->id;
            $alergeno = Alergeno::all()->random();
            $alergeno->productos()->attach($producto);
        }
          Schema::enableForeignKeyConstraints(); 
    }
}
