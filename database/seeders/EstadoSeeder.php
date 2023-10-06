<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


/**
 * Summary of EstadoSeeder
 */
class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $estado =new Estado();
        $estado->estado ="Excelente";
        $estado->save();

        $estado1 =new Estado();
        $estado1->estado ="Regular";
        $estado1->save();

        $estado2 =new Estado();
        $estado2->estado ="Malo";
        $estado2->save();
    }
}
