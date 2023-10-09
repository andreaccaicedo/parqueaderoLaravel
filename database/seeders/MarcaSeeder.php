<?php

namespace Database\Seeders;

use App\Models\Marca;


use App\Models\TipoVehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Marca::truncate();

  

        $json1 = File::get("database/data/car_brands.json");

        $car_brands = json_decode($json1);

        $json2 = File::get("database/data/moto_brands.json");

        $moto_brands = json_decode($json2);

        foreach ($car_brands as $key => $value) {

            Marca::create([

                //"id" => $value->id,

                "name" => $value->name

            ]);

        }

        foreach ($moto_brands as $key => $value) {

            Marca::create([

                //"id" => $value->id,

                "name" => $value->name

            ]);

        }
    }
}
