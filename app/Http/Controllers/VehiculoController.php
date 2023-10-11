<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVehiculoRequest;
use App\Http\Requests\UpdateVehiculoRequest;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //
         $vehiculos = Vehiculo::paginate(5);
         return view('vehiculos.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //
         return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculoRequest $request)
    {
        //
        $vehiculo = new Vehiculo();
        $vehiculo->estado_id = $request->estado_id;
        $vehiculo->marca_id = $request->marca_id;
        $vehiculo->usuario_id = $request->usuario_id;
        $vehiculo->placa = $request->placa;
        $vehiculo->observaciones = $request->observaciones;
        $vehiculo->save();
        return redirect()->route('vehiculos.index',$vehiculo);

    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
         //
         return view('vehiculos.show',compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
        return view('vehiculos.edit',compact('vehiculo')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculoRequest $request, Vehiculo $vehiculo)
    {
         //
         $vehiculo->estado_id = $request->estado_id;
         $vehiculo->marca_id = $request->marca_id;
         $vehiculo->usuario_id = $request->usuario_id;
         $vehiculo->placa = $request->placa;
         $vehiculo->observaciones = $request->observaciones;
         $vehiculo->save();
         return redirect()->route('vehiculos.index',$vehiculo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vehiculo)
    {
        //
        $vehiculo->delete();
        return Redirect()->route('vehiculos.index')->with('success','Vehículo eliminado');  
    }
}
