<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    protected $model = \App\Models\Vehicle::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        $faker = \Faker\Factory::create('ms_MY');

    
        return [
       
            'noplat' => $faker->jpjNumberPlate,
            'model'=> $this->faker->word(),
            'color'=> $this->faker->colorName(),
            'user_id'=> \App\Models\User::factory(), 
        ];
    
    }
}
