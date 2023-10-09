<?php

namespace Database\Seeders;

use App\Models\Marca;
use App\Models\TipoVehiculo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MarcaSeeder extends Seeder
{
    public function run()
    {
        // Obtener los tipos de vehículos por nombre
        $carroTipo = TipoVehiculo::where('tipoVehiculo', 'Carro')->first();
        $motoTipo = TipoVehiculo::where('tipoVehiculo', 'Moto')->first();

        if (!$carroTipo || !$motoTipo) {
            // Asegurarse de que los tipos de vehículos existan antes de continuar
            $this->call(TipoVehiculoSeeder::class);
            $carroTipo = TipoVehiculo::where('tipoVehiculo', 'Carro')->first();
            $motoTipo = TipoVehiculo::where('tipoVehiculo', 'Moto')->first();
        }

        // Marcar marcas como asociadas a los tipos de vehículos correspondientes
        $json1 = File::get("database/data/car_brands.json");
        $car_brands = json_decode($json1);
        foreach ($car_brands as $key => $value) {
            $marca = Marca::create([
                "name" => $value->name,
            ]);
            $marca->tiposVehiculo()->attach($carroTipo);
        }

        $json2 = File::get("database/data/moto_brands.json");
        $moto_brands = json_decode($json2);
        foreach ($moto_brands as $key => $value) {
            $marca = Marca::create([
                "name" => $value->name,
            ]);
            $marca->tiposVehiculo()->attach($motoTipo);
        }
    }
}
