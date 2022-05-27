<?php

namespace App\Http\Controllers\Pedido;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Establecimiento;
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
        if ($administrador->rol == "CAMARERO"){
            $establecimientoProductos = Establecimiento::all()->load('productos')
            ->where('id',$administrador->establecimiento_id); 

            $pedidoProductos = Pedido::with('productos')->wherehas('productos')
            ->where('establecimiento_id',$administrador->establecimiento_id)->get(); 
             // dd($pedidoProductos);
        }
        
        return view('PedidosProductos.index', compact('pedidoProductos','establecimientoProductos'));
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
