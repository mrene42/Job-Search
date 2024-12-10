<?php

namespace Tests\Feature\Api;

use App\Models\Job;
use Tests\TestCase;
use App\Models\Follow;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    //R del CRUD
    public function test_CheckIfCanReceiveFollowInJsonFile(){
        $jobs = job::factory()->create();
        $follows = Follow::factory()->create();
        $response = $this->get(route('apiHomeFollow'));
        
        $response->assertStatus(200)
                 ->assertJsonCount(1);
    }

    //C del CRUD
    public function test_CheckIfCanCreateNewFollowWithJsonFile(){
        
        $jobs = job::factory()->create();

        $response = $this->post(route('apiCreateFollow', 1),[
            'news' => ["Nueva entrevista"],
        ]);

        $data = ['news' => "Nueva entrevista"];

        $response = $this->get(route('apiHomeFollow'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);
    }

    //U del CRUD
    public function test_CheckIfCanUpdateFollowWithJsonFile(){
        $jobs = job::factory()->create();
       
        $response = $this->post(route('apiCreateFollow', 1),[
            'news' => ['Pendiente de llamada'],
        ]);

        $data = ['news' => 'Pendiente de llamada'];

        $response = $this->get(route('apiHomeFollow'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);

        $response = $this->put(route('apiUpdateFollow', 1), [
            'job_id' => 1,
            'news' => "Llamada realizada",
        ]);

        $data = ['news' => "Llamada realizada"];
        
        $response = $this->get(route('apiHomeFollow'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);
    }

    //D del CRUD
    public function test_CheckIfCanDeleteFollowWithApi(){
        $jobs = job::factory(1)->create();
        $follos =Follow::factory(2)->create();

        $response = $this->get(route('apiHomeFollow'));
        $response->assertStatus(200)
                 ->assertJsonCount(2);

        $response = $this->delete(route('apiDeleteFollow', 1));
        $this->assertDatabaseCount("Follows", 1);

        $response = $this->get(route('apiHomeFollow'));
        $response->assertStatus(200)
                 ->assertJsonCount(1);
    }
}