<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specialty;

class SpecialtySeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Specialty::firstOrCreate(['name' => 'Psychology']);
      Specialty::firstOrCreate(['name' => 'Pediatrics']);
      Specialty::firstOrCreate(['name' => 'Physiotherapy']);
      Specialty::firstOrCreate(['name' => 'Dermatology']);
      Specialty::firstOrCreate(['name' => 'Ophtalmology']);
      Specialty::firstOrCreate(['name' => 'Dentistry']);
      Specialty::firstOrCreate(['name' => 'Gynaechology']);
      Specialty::firstOrCreate(['name' => 'Meditation']);
    }
}