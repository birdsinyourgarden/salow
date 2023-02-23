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
          'name' => fake()->firstName(),
          'last_name' => fake()->lastName(),
          'email' => fake()->email(),
          'phone_number' => fake()->phoneNumber(),
          'picture' => fake()->imageUrl(),
          'description' => fake()->text(),
          'specialty_id' => Specialty::all()->random()->id,
        ];
    }
}
