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
      Specialty::create([
        'name' => 'Psychology',
    ]);
    
    Specialty::create([
        'name' => 'Pediatrics',
    ]);

    Specialty::create([
        'name' => 'Physiotherapy',
    ]);

    Specialty::create([
        'name' => 'Dermatology',
    ]);

    Specialty::create([
        'name' => 'Ophtalmology',
    ]);

    Specialty::create([
        'name' => 'Dentistry',
    ]);

    Specialty::create([
        'name' => 'Gynaechology',
    ]);

    Specialty::create([
        'name' => 'Meditation',
    ]);
    }
}
