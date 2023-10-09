<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Marca;
use Illuminate\Database\Seeder;

use Database\Seeders\EstadoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(\Database\Seeders\EstadoSeeder::class);
        $this->call(\Database\Seeders\TipoUsuarioSeeder::class);
        $this->call(\Database\Seeders\TipoVehiculoSeeder::class);

        Marca::factory(50)->create();
    }
}
