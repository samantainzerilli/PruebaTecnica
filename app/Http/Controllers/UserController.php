<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        // Aquí recuperas la lista de usuarios y la pasas a la vista
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    public function create()
    {
        // Aquí muestras el formulario para crear un nuevo usuario
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        // Aquí guardas el nuevo usuario en la base de datos
        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
    }
    
    public function edit(User $user)
    {
        // Aquí muestras el formulario para editar un usuario existente
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        // Aquí actualizas los datos del usuario en la base de datos
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }
    
    public function destroy(User $user)
    {
        // Aquí eliminas el usuario de la base de datos
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
    
}
