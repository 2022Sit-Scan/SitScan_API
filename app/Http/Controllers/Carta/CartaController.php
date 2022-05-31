<?php

namespace App\Http\Controllers\Carta;

use App\Models\Carta;
use Illuminate\Http\Request;
use App\Models\Establecimiento;
use App\Http\Controllers\Controller;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $request->is('api/*')){
            return $this->showAll(Carta::all());
            }
            else{
                $cartas = Carta::all();
             return view('cartas.index', compact('cartas'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establecimientos = Establecimiento::all();
        return view('cartas.create', compact('establecimientos'));
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
            'nombre' => 'required',
            'establecimiento_id'=> 'integer',
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',
        ];
        $validatedData = $request->validate($rules, $messages);

        Carta::create([
            'nombre' => $validatedData['nombre'],
            'establecimiento_id' => $validatedData['establecimiento_id'],
           
        ]);

        return redirect()->route('cartas.index');
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
    public function edit(Carta $carta)
    {
        $establecimientos= Establecimiento::all();
        return view('cartas.edit', ['carta' => $carta],compact('establecimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Carta $carta)
    {
        
        $rules = [
            'nombre' => 'required',
            'establecimiento_id'=> 'integer',
        ];
        
        $validatedData = $request->validate($rules);

        $carta->fill($validatedData);

        if(!$carta->isDirty()){
            return redirect()->route('cartas.edit', ['carta' => $carta])->withErrors(['errors' => 'Debes cambiar al menos 1 campo']);
        }

        $carta->update($validatedData);
        return redirect()->route('cartas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carta $carta)
    {
        $carta->delete();

        return redirect()->route('cartas.index');
    }
}
