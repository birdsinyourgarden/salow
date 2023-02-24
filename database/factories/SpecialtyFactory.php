<?php

namespace Database\Factories;

use App\Models\Specialty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialty>
 */
class SpecialtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function configure()
     {
         return $this->afterCreating(function (Specialty $specialty) {
             // Agregar especialidades predefinidas
             Specialty::create(['name' => 'Psychology']);
             Specialty::create(['name' => 'Pediatrics']);
             Specialty::create(['name' => 'Physiotherapy']);
             Specialty::create(['name' => 'Dermatology']);
             Specialty::create(['name' => 'Ophtalmology']);
             Specialty::create(['name' => 'Dentistry']);
             Specialty::create(['name' => 'Gynaechologyy']);
             Specialty::create(['name' => 'Meditation']);
         });
     }

    public function definition(): array
    {
        return [
          'name' => fake()->name(),
        ];
    }
}