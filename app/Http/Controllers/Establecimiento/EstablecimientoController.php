<?php

namespace App\Http\Controllers\Establecimiento;

use App\Models\Establecimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $request->is('api/*')){
            return $this->showAll(Establecimiento::all());
            }
            else{
                $establecimientos = Establecimiento::all();
             return view('establecimientos.index', compact('establecimientos'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establecimientos.create');
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
            'urlLogo' => '',
           
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',

        ];
        $validatedData = $request->validate($rules, $messages);
        
        Establecimiento::create([
            'nombre' => $validatedData['nombre'],
            'urlLogo' => $validatedData['urlLogo'],
        ]);

        return redirect()->route('establecimientos.index');
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
    public function destroy(Establecimiento $establecimiento)
    {
        $establecimiento->delete();

        return redirect()->route('establecimientos.index');
    }
}
