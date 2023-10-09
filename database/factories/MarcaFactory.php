<?php

namespace Database\Factories;

use App\Models\Marca;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Fakecar;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marca>
 */
class MarcaFactory extends Factory
{
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
     protected $model = Marca::class;

    /**
     * Define the model's default state
     * @return array<string, mixed>
     */
     public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        $marca = $this->faker->vehicleArray();

        return [
            'marca'  => $marca['brand'],
        ];
    }
}
