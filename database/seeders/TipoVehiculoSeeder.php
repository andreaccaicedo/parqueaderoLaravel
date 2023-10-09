<?php

namespace Database\Seeders;

use App\Models\TipoVehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipoVehiculo1 =new TipoVehiculo();
        $tipoVehiculo1->tipoVehiculo ="Carro";
        $tipoVehiculo1->save();

        $tipoVehiculo2 =new TipoVehiculo();
        $tipoVehiculo2->tipoVehiculo ="Moto";
        $tipoVehiculo2->save();
    }
}
