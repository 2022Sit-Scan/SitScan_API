<?php

namespace App\Http\Controllers\Usuario;

use view;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrador = Auth::user();
        if ($administrador->rol == "GERENTE"){
            $usuarios = Usuario::all()->where('establecimiento_id',$administrador->establecimiento_id); 
        }
        else if ($administrador->rol == "ADMINISTRADOR")
        {
            $usuarios = Usuario::all();
        }
        else {
            $usuarios = "";
        }
       
        

        // foreach ($usuarios as $usurio){
        //     $usuario
        // }

        //$title = 'usuarios List';

 //     return view('usuarios.index')
 //         ->with('usuarios', usuario::all())
 //         ->with('title', 'Listado de usuarios');
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function create()
    {
        return view('usuarios.create');
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
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:6',
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',
            'email.email' => 'El campo correo no tiene el formato adecuado.',
            'password' => 'La contraseña es campo obligatorio',
        ];
        $validatedData = $request->validate($rules, $messages);
        
        Usuario::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password'])
        ]);

        return redirect()->route('usuarios.index');
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $rules = [
            'email' => ['email', Rule::unique('usuarios')->ignore($usuario->id)],
            'password' => 'nullable|min:6', // si no hacemos ninguna validacion para este, debemos ponerle '' aunque sea para tenerlo disponible en la vista
        ];
        
        $validatedData = $request->validate($rules);

        if ($validatedData['password'] != null) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $usuario->fill($validatedData);

        if(!$usuario->isDirty()){
            return redirect()->route('usuarios.edit', ['usuario' => $usuario])->withErrors(['errors' => 'Debes cambiar al menos 1 campo']);
        }

        $usuario->update($validatedData);
        return redirect()->route('usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
