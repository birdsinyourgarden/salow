<?php

namespace Database\Factories;

use App\Models\Physician;
use App\Models\Specialty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Physician>
 */
class PhysicianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => fake()->name(),
          'last_name' => fake()->last_name(),
          'email' => fake()->unique(),
          'phone_number' => fake()->phone_number(),
          'picture' => fake()->picture(),
          'description' => fake()->description(),
          'specialty_id' => Specialty::all()->random()->id,
        ];
    }
}
