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

       

        //   //crea 30 pedidos
          $cantPedidos = 30;
          factory(Pedido::class,$cantPedidos)->create();

        
          
            // //crea 5 alergenos por producto

        $alergenos_producto =20;

        for ($i=0; $i<$alergenos_producto;$i++)
        {
            $producto = Producto::all()->random()->id;
            $alergeno = Alergeno::all()->random();
            $alergeno->productos()->attach($producto); 
        }

           // //crea todos los productos por carta (precio)
           $cartas = Carta::all();
           
        Producto::all()->each(
            function($product) use ($cartas){
                $randomestablecimientos = $cartas->pluck('id');
                $product->cartas()->attach($randomestablecimientos,['precio'=>mt_rand(2.5,10.5)]);
            }
        );

        //pedido producto
      
        $productos=Producto::all();
             Pedido::all()->each(
            function($product) use ($productos){
                $randomProductos = $productos->random(mt_rand(1,5))->pluck('id');
                $product->productos()->attach($randomProductos,['cantidad'=>mt_rand(1,5)]);
            }
        );
         Schema::enableForeignKeyConstraints(); 
    }
}
