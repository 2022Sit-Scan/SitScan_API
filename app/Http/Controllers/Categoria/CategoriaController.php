<?php

namespace App\Http\Controllers\Categoria;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request){

        if( $request->is('api/*')){
        return $this->showAll(Categoria::all());
        }
        else{
            $categorias = Categoria::all()->load('catHijos','catHijos');
         
         return view('categorias.index', compact('categorias'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriaspadre = Categoria::all()->where('categoriaPadre',NULL);
        return view('categorias.create', compact('categoriaspadre'));
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
            'categoriaPadre' => '',
            'nombre' => 'required | max:20',
            'urlImagen' => '',
           
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',

        ];
        $validatedData = $request->validate($rules, $messages);
        
        Categoria::create([
            'categoriaPadre'=>  $validatedData['categoriaPadre'],
            'nombre' => $validatedData['nombre'],
            'urlImagen' => $validatedData['urlImagen'],
        ]);

        return redirect()->route('categorias.index');
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
    public function edit(Categoria $categoria)
    {
        $categoriaspadre = Categoria::all()->where('categoriaPadre',NULL);
        return view('categorias.edit', ['categoria'=>$categoria],compact('categoriaspadre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $rules = [
            'nombre' => '',
            'urlImagen' => '', // si no hacemos ninguna validacion para este, debemos ponerle '' aunque sea para tenerlo disponible en la vista
            'categoriaPadre'=> '',
        ];
        
        $validatedData = $request->validate($rules);

        $categoria->fill($validatedData);

        if(!$categoria->isDirty()){
            return redirect()->route('categorias.edit', ['categoria' => $categoria])->withErrors(['errors' => 'Debes cambiar al menos 1 campo']);
        }

        $categoria->update($validatedData);
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}
