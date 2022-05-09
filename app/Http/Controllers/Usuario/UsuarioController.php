<?php

namespace App\Http\Controllers\Usuario;

use view;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Usuario::all();

        //$title = 'Users List';

 //     return view('users.index')
 //         ->with('users', User::all())
 //         ->with('title', 'Listado de usuarios');
        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
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
            'email' => 'required|email|unique:users,email',
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

        return redirect()->route('users.index');
    }

    public function edit(Usuario $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $user)
    {
        $rules = [
            'name' => 'min:5|max:255',
            'email' => ['email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|min:6', // si no hacemos ninguna validacion para este, debemos ponerle '' aunque sea para tenerlo disponible en la vista
        ];
        
        $validatedData = $request->validate($rules);

        if ($validatedData['password'] != null) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $user->fill($validatedData);

        if(!$user->isDirty()){
            return redirect()->route('users.edit', ['user' => $user])->withErrors(['errors' => 'Debes cambiar al menos 1 campo']);
        }

        $user->update($validatedData);
        return redirect()->route('users.show', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
