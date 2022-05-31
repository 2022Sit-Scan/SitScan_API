<?php

namespace App\Http\Controllers\Alergeno;

use App\Models\Alergeno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlergenoController extends Controller
{
    public function index(Request $request){

        if( $request->is('api/*')){
        return $this->showAll(Alergeno::all());
        }
        else{
            $alergenos = Alergeno::all();
         return view('alergenos.index', compact('alergenos'));
        }
    }
    
       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('alergenos.create');
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
            'nombre' => 'required | max:20',
            'urlImagen' => '', // si no hacemos ninguna validacion para este, debemos ponerle '' aunque sea para tenerlo disponible en la vista
         
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute tiene mas de 20 caracteres'
        ];
        $validatedData = $request->validate($rules, $messages);

        Alergeno::create([
            'nombre' => $validatedData['nombre'],
            'urlImagen' => $validatedData['urlImagen'],
        ]);

        return redirect()->route('alergenos.index');
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
    public function edit(Alergeno $alergeno)
    {
        
        return view('alergenos.edit', ['alergeno' => $alergeno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alergeno $alergeno)
    {
        $rules = [
            'nombre' => ' max:20',
            'urlImagen' => '', // si no hacemos ninguna validacion para este, debemos ponerle '' aunque sea para tenerlo disponible en la vista
          
        ];
        
        $validatedData = $request->validate($rules);

        $alergeno->fill($validatedData);

        if(!$alergeno->isDirty()){
            return redirect()->route('alergenos.edit', ['alergeno' => $alergeno])->withErrors(['errors' => 'Debes cambiar al menos 1 campo']);
        }

        $alergeno->update($validatedData);
        return redirect()->route('alergenos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alergeno $alergeno)
    {
        $alergeno->delete();

        return redirect()->route('alergenos.index');
    }
    
}
