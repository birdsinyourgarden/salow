<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Specialty;
use App\Models\User;

class CRUDSpecialtyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_aSpecialtyCanBeShowed(){
        $this->withExceptionHandling();
        $specialty = Specialty::factory()->create();
        $this->assertCount(9, Specialty::all());
        $response = $this->get(route('showSpecialty', $specialty->id));
        $response->assertSee($specialty->name);
    }
}