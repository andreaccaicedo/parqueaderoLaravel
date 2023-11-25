<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Vehiculo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DateTime;




use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFacturaRequest;
use App\Http\Requests\UpdateFacturaRequest;

class FacturaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $facturas = Factura::orderBy('created_at', 'desc')->paginate(10);
        return view('facturas.index',compact('facturas'));
       /*  $facturas = Factura::with('vehiculo')->paginate(5);
        return view('facturas.index', compact('facturas')); */


       /*  $facturas = Factura::all(); // Obtener todas las facturas
        return view('facturas.index', compact('facturas')); */
     /*    $facturas = Factura::paginate(10); // El número 10 es la cantidad de elementos por página


        $facturas = Factura::all();

        return view('facturas.index', compact('facturas')); */
        

        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculos = Vehiculo::all();
        return view('facturas.create', compact('vehiculos'));
        
        // Aquí mostrarías el formulario de creación de facturas
/*         $vehiculos = Vehiculo::all(); // Obtén todos los vehículos para mostrar en el formulario
        $valorTotal = 0; // Reemplaza con tu cálculo real

        return view('facturas.create', compact('vehiculos', 'valorTotal')); */
        

    
    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacturaRequest $request)
    {

        // Validación de los datos ingresados en el formulario
        $request->validate([
        'vehiculo_id' => 'required|exists:vehiculos,idVehiculo',
        'horaEntrada' => 'required|date',
        'horaSalida' => 'required|date|after:horaEntrada',
        'valorPorHora' => 'required|numeric',
        ]);

        // Crear una nueva instancia de Factura
         $factura = new Factura();

        // Asignar valores a los atributos de la factura
        $factura->vehiculo_id = $request->vehiculo_id;
        $factura->horaEntrada = $request->horaEntrada;
        $factura->horaSalida = $request->horaSalida;
        $factura->valorPorHora = $request->valorPorHora;

        // Convertir las cadenas a objetos DateTime
                // Crear instancias de Carbon para las horas de entrada y salida
                $horaEntrada = Carbon::parse($request->horaEntrada);
                $horaSalida = Carbon::parse($request->horaSalida);

                // Calcular la diferencia en minutos
                $diffEnMinutos = $horaSalida->diffInMinutes($horaEntrada);

                // Calcular el valor total
                $valorTotal = ($diffEnMinutos / 60) * $request->valorPorHora;

                // Asignar el valor total a la propiedad correspondiente en $factura
                $factura->valorTotal = $valorTotal;



        // Guardar la factura en la base de datos
         $factura->save();

         // Redireccionar a la página de facturas con un mensaje de éxito
        return redirect()->route('facturas.index')->with('success', 'Factura agregada correctamente.');

       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Factura $factura)
    {
        //
        return view('facturas.show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factura $factura)
    {
        $vehiculos = Vehiculo::all(); // Obtén todos los vehículos para mostrar en el formulario

        return view('facturas.edit', compact('factura', 'vehiculos'));
    }

    public function update(UpdateFacturaRequest $request, Factura $factura)
    {
        // Asignar valores a los atributos de la factura
        $factura->vehiculo_id = $request->vehiculo_id;
        $factura->horaEntrada = $request->horaEntrada;
        $factura->horaSalida = $request->horaSalida;
        $factura->valorPorHora = $request->valorPorHora;

        // Convertir las cadenas a objetos DateTime
                // Crear instancias de Carbon para las horas de entrada y salida
                $horaEntrada = Carbon::parse($request->horaEntrada);
                $horaSalida = Carbon::parse($request->horaSalida);

                // Calcular la diferencia en minutos
                $diffEnMinutos = $horaSalida->diffInMinutes($horaEntrada);

                // Calcular el valor total
                $valorTotal = ($diffEnMinutos / 60) * $request->valorPorHora;

                // Asignar el valor total a la propiedad correspondiente en $factura
                $factura->valorTotal = $valorTotal;
        

        $factura->save();
        return redirect()->route('facturas.index',$factura)->with('success', 'Factura actualizada');
        
    }

    public function destroy(Factura $factura)
    {
        $factura->delete();
        return redirect()->route('facturas.index')->with('success', 'Factura eliminada');
    }

}
