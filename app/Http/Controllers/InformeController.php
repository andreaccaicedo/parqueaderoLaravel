<?php

// app/Http/Controllers/InformeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura; // Asegúrate de importar el modelo correcto

class InformeController extends Controller
{


    public function mostrarFormulario()
    {
        return view('informe.formulario');
    }

    
    public function facturasPorDia(Request $request)
    {
/*         // Obtener la fecha del formulario o establecer una fecha predeterminada
        $fechaSeleccionada = $request->input('fecha', now()->toDateString());

        // Obtener las facturas para la fecha seleccionada
        $facturas = Factura::whereDate('horaEntrada', $fechaSeleccionada)->get();

        // Puedes pasar las facturas a una vista para mostrar el informe
        return view('informe.facturasPorDia', compact('facturas', 'fechaSeleccionada')); */

        $fechaSeleccionada = $request->input('fecha', now()->toDateString());
        $facturas = Factura::whereDate('horaEntrada', $fechaSeleccionada)->get();

        // Puedes calcular el número de vehículos y el ingreso total aquí
        $numVehiculos = $facturas->count();
        $ingresoTotal = $facturas->sum('valorTotal');

        return view('informe.facturasPorDia', compact('facturas', 'fechaSeleccionada', 'numVehiculos', 'ingresoTotal'));
    }
}