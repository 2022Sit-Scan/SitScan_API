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

       
        
        $this->call (CategoriaSeeder::class);
        $this->call (EstablecimientoSeeder::class);
        $this->call (CartaSeeder::class);
        $this->call (MesaSeeder::class);
        $this->call (ProductoSeeder::class);
        $this->call (AlergenoSeeder::class);
        $this->call (UsuarioSeeder::class);
      //  $this->call (PedidoProductoSeeder::class);

       

        //   //crea 250 pedidos
          $cantPedidos = 250;
          factory(Pedido::class,$cantPedidos)->create();

          //   //crea 30 productos por carta
          $productos_carta =30;
          for ($i=0; $i<$productos_carta;$i++)
          {
              $producto = Producto::all()->random();
              $carta = Carta::all()->random()->id;
              $producto->cartas()->attach($carta);
          }
          
            // //crea 5 alergenos por producto

        $alergenos_producto =20;

        for ($i=0; $i<$alergenos_producto;$i++)
        {
            $producto = Producto::all()->random()->id;
            $alergeno = Alergeno::all()->random();
            $alergeno->productos()->attach($producto);
        }

           // //crea todos los productos por establecimiento (precio)
           $establecimientos = Establecimiento::all();
           
        factory(Producto::class)->create()->each(
            function($product) use ($establecimientos){
                $randomestablecimientos = $establecimientos->pluck('id');
                $product->establecimientos()->attach($randomestablecimientos,['precio'=>mt_rand(2.5,10.5)]);
            }
        );

        //pedido producto
        $pedido_producto =20;

        for ($i=0; $i<$pedido_producto;$i++)
        {
            $producto = Producto::all()->random()->id;
            $pedido = Pedido::all()->random();
            $pedido->productos()->attach($producto);
        }

         Schema::enableForeignKeyConstraints(); 
    }
}
