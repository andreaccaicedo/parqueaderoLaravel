<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios = Usuario::paginate(5);
        return view('usuarios.index',compact('usuarios'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        //
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->telefono = $request->telefono;
        $usuario->tipo_usuario_id = $request->tipo_usuario_id;

        $request->validate([
            'telefono' => 'required|numeric',
        ]);

        $usuario->save();
        return redirect()->route('usuarios.index',$usuario);

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
        return view('usuarios.show',compact('usuario'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
        return view('usuarios.edit',compact('usuario')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        //
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->telefono = $request->telefono;
        $usuario->tipo_usuario_id = $request->tipo_usuario_id;

        $request->validate([
            'telefono' => 'required|numeric',
        ]);

        $usuario->save();
        return redirect()->route('usuarios.index',$usuario);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
        $usuario->delete();
        return Redirect()->route('usuarios.index')->with('success','Usuario eliminado');  
      }
}
