<?php

namespace App\Http\Controllers\Establecimiento;


use App\Models\Carta;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Establecimiento;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EstablecimientoProductoController extends Controller
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
            $establecimientoProductos = Establecimiento::all()->load('productos')
            ->where('id',$administrador->establecimiento_id); 
            //  dd($establecimientoProductos);
        }
        else if ($administrador->rol == "ADMINISTRADOR")
        {
            $establecimientoProductos = Producto::all();
        }
        else {
            $usuarios = "";
        }

        return view('listaPrecios.index', compact('establecimientoProductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administrador = Auth::user();
        $productos= DB::table('productos')
            ->join('carta_producto','productos.id','=','carta_producto.producto_id') 
        ->get(); 
        $establecimientoProductos= $productos->where('carta_id','!=',$administrador->establecimiento_id);
        
        dd($establecimientoProductos);
        return view('listaprecios.create',compact('$establecimientoProductos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Carta $carta, Establecimiento $establecimiento)
    {
        $rules = [
            'establecimiento_id' => '',
            'producto_id' => 'required',
            'precio' => 'required',
           
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',

        ];
        
        $validatedData = $request->validate($rules, $messages);
        $carta->productos()->syncWithoutDetaching($validatedData);
       
        return redirect()->route('listaPrecios.index');
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
        return view('listaPrecios.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
       // $id->delete();   
        return redirect()->route('listaPrecios.index');
    }
}
