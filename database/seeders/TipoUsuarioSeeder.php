<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipoUsuario1 =new TipoUsuario();
        $tipoUsuario1->tipoUsuario ="Universidad Mariana";
        $tipoUsuario1->save();

        $tipoUsuario2 =new TipoUsuario();
        $tipoUsuario2->tipoUsuario ="Particular";
        $tipoUsuario2->save();
    }
}
