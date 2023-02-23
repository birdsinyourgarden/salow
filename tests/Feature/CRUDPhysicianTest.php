<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Physician;
use App\Models\User;

class CRUDPhysicianTest extends TestCase
{
    use RefreshDatabase;

    private $physician;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        // Creamos un registro de physician
        $this->physician = Physician::factory()->create();
    }

    public function tearDown(): void
    {
        // Eliminamos el registro de physician creado en el setUp
        $this->physician->delete();

        parent::tearDown();
    }
     /** @test */
    //  public function a_physician_can_be_show()
    //  {
    //      $response = $this->get(route('showPhysician', ['id' => $this->physician->id]));
    //      $response->assertStatus(200);
    //  }

    /* public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    } */

}