<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CentreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(30), 
            'address' => $this->faker->text(50), 
            'cp' => $this->faker->numberBetween(8010, 8020), 
            'city' => $this->faker->name(15) 
        ];
    }
}
