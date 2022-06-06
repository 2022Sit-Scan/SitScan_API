<?php

namespace App\Http\Controllers\Pedido;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Establecimiento;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PedidoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrador = Auth::user();
        if ($administrador->rol != "ADMINISTRADOR"){
           
           $pedidoProductos = Pedido::with('productos','establecimiento')->where('establecimiento_id',2)->where('estado',0)->get();  
          // $producto = $pedido->producto;
           $consulta = DB::table('establecimiento_producto')
           ->where('establecimiento_id',$administrador->establecimiento_id)
           ->get();
          // dd($pedidoProductos);

            // $pedido = Pedido::with('productos.establecimientos')->wherehas('productos')->where('establecimiento_id',$administrador->establecimiento_id)->where('estado',0)->get(); 
            // $pedidoFiltrado= $pedido->pluck('pedidos');

            return view('pedidosproductos.index',compact('pedidoProductos'));
        }
        else{
            $pedido = Pedido::all();

            return view('usuarios.index');
        }
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
