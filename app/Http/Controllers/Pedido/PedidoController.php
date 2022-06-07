<?php

namespace App\Http\Controllers\Pedido;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $request->is('api/*')){
            return $this->showAll(Pedido::all());
            }
            else{
                $pedidos = Pedido::all();
             return view('pedidos.index', compact('pedidos'));
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
      
        $pedido = new Pedido();
        $ultimopedido= $pedido->orderBy('id', 'desc')->first();
        $pedido->establecimiento_id = $request->establecimiento_id;
        $pedido->mesa_id = $request->mesa_id;
        $pedido->estado = $request->estado;
        $pedido->nombreCliente = $request->nombreCliente;
        $pedido->save();
        $productos = $request->productos;
            $pedido->productos()->syncWithoutDetaching($ultimopedido,$productos['producto_id'],$productos['cantidad']);
        dd($pedido);
        return $this->showOne($pedido,201);
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
        $validatedData = $request;

        Pedido::where('id',$pedido->id)->update(array('estado' => 1));

        return redirect()->route('pedidosproductos.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index');
    }
}
