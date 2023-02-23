<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Physician;
use App\Models\User;

class CRUDPhysicianTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    /* public function test_listPhysicianAppearInHomeView(){
        $this->withExceptionHandling();
        $physicians = Physician::factory(5)->create();
        $physician = $physicians[0];
        $response = $this->get('/');
        $response->assertSee($physician->name);
        $response->assertStatus(200)
                ->assertViewIs('home');
    }  
    public function test_anPhysicianCanBeDeleted(){
            $this->withExceptionHandling();
            $physician = Physician::factory()->create();
            $this->assertCount(1, Physician::all());

            $userNoAdmin = User::factory()->create(['isAdmin' => false]);
            $this->actingAs($userNoAdmin);
            $response = $this->delete(route('deleteAdoption', $physician->id));
            $this->assertCount(1, Physician::all());

            $userAdmin = User::factory()->create(['isAdmin' => true]);
            $this->actingAs($userAdmin);
            $response = $this->delete(route('deleteAdoption', $physician->id));
            $this->assertCount(0, Physician::all());
    }
    public function test_aPhysicianCanBeCreated(){
            $this->withExceptionHandling();

            $userAdmin = User::factory()->create(['isAdmin' => true]);
            $this->actingAs($userAdmin);

            $response = $this->post((route('storeAdoption')),
            [
                'name' => 'name',
                'description' => 'description',
                'spaces' => '80',
                'img' => 'img',
                'datetime' => '2022/12/24 18:00:00'
            ]);
            $this->assertCount(1, Physician::all());

            $userNoAdmin = User::factory()->create(['isAdmin' => false]);
            $this->actingAs($userNoAdmin);
            
            $response = $this->post((route('storePhysician')),
            [
                'name' => 'name',
                'description' => 'description',
                'spaces' => '80',
                'img' => 'img',
                'datetime' => '2022/12/24 18:00:00'
            ]);
            $this->assertCount(1, Physician::all());
    }
    public function test_aPhysicianCanBeUpdated(){
        $this->withExceptionHandling();
        $physician = Physician::factory()->create();
        $this->assertCount(1, Physician::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        $response = $this->patch(route('updatePhysician', $physician->id), ['name' => 'New Name']);
        $this->assertEquals('New Name', Physician::first()->name);

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);
        $response = $this->patch(route('updatePhysician', $physician->id), ['name' => 'New Name if not Admin']);
        $this->assertEquals('New Name', Physician::first()->name);
    }  */
    public function test_aPhysicianCanBeShowed(){
        $this->withExceptionHandling();
        $physician = Physician::factory()->create();
        $this->assertCount(1, Physician::all());
        $response = $this->get(route('showPhysician', $physician->id));
        $response->assertSee($physician->name);
        $response->assertStatus(200)->assertViewIs('showPhysician');
    }
}