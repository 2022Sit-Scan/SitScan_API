<?php

namespace App\Http\Controllers\Producto;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $request->is('api/*')){
            return $this->showAll(Producto::all());
            }
            else{
                $productos = Producto::paginate(10);
             return view('productos.index', compact('productos'));
            }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $rules = [
            'nombre' => 'required| max:20',
            'urlImagen' => '', // si no hacemos ninguna validacion para este, debemos ponerle '' aunque sea para tenerlo disponible en la vista
            'descripcion' => 'max:1000',
            'categoria_id'=> 'integer',
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute tiene mas de 1000 caracteres'
        ];
        $validatedData = $request->validate($rules, $messages);

        Producto::create([
            'nombre' => $validatedData['nombre'],
            'urlImagen' => $validatedData['urlImagen'],
            'categoria_id' => $validatedData['categoria_id'],
            'descripcion' => $validatedData['descripcion'],
        ]);

        return redirect()->route('productos.index');
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
    public function edit(Producto $producto)
    {
        $categorias= Categoria::all();
        return view('productos.edit', ['producto' => $producto],compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $rules = [
            'nombre' => 'max:20',
            'urlImagen' => '', // si no hacemos ninguna validacion para este, debemos ponerle '' aunque sea para tenerlo disponible en la vista
            'descripcion' => 'max:1000',
            'categoria_id'=> 'integer',
        ];
        
        $validatedData = $request->validate($rules);

        $producto->fill($validatedData);

        if(!$producto->isDirty()){
            return redirect()->route('productos.edit', ['producto' => $producto])->withErrors(['errors' => 'Debes cambiar al menos 1 campo']);
        }

        $producto->update($validatedData);
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
