<?php

namespace Tests\Feature\Api;

use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertJson;

class JobTest extends TestCase
{
    use RefreshDatabase;
    
    //R del CRUD
    public function test_CheckIfJobReceiveInJsonFile(){
        $jobs = job::factory(2)->create();
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    //D del CRUD
    public function test_CheckIfCanDeleteJobWithApi(){
        $jobs = job::factory(2)->create();
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                 ->assertJsonCount(2);

        $response = $this->delete(route('apiDeleteJob', 1));
        $this->assertDatabaseCount("jobs", 1);

        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1);
    }

    //C del CRUD
    public function test_CheckIfCanCreateNewJobWithJsonFile(){

        $response = $this->post(route('apiCreateJob'),[
            'offer' => 'Project manager',
            'company' => 'QuentalTech',
            'description' => 'Gestor de equipos y proyectos',
            'status' => 'In progress'
        ]); 

        $response = $this->get(route('apiHome'));
         $data1 = ['offer' => "Project manager"];
         $data2 = ['company' => "QuentalTech"];
         $data3 = ['description' => "Gestor de equipos y proyectos"];
         $data4 = ['status' => "In progress"];
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data1)
                 ->assertJsonFragment($data2)
                 ->assertJsonFragment($data3)
                 ->assertJsonFragment($data4);

        $jobs = job::factory(2)->create();

        $response = $this->post(route('apiCreateJob'),[
            'offer' => "Desarrollo Web",
            'company' => "CIBERCI",
            'description' => "Conocimientos tecnicos en PHP",
            'status' => "In progress",
        ]);
    
        $response = $this->get(route('apiHome'));
         $data1 = ['offer' => "Desarrollo Web"];
         $data2 = ['company' => "CIBERCI"];
         $data3 = ['description' => "Conocimientos tecnicos en PHP"];
         $data4 = ['status' => "In progress"];
        $response->assertStatus(200)
                 ->assertJsonCount(4)
                 ->assertJsonFragment($data1)
                 ->assertJsonFragment($data2)
                 ->assertJsonFragment($data3)
                 ->assertJsonFragment($data4);
    }

    //U de CRUD
    public function test_CheckIfCanUpdateOneJobWithJsonFile(){
        $response = $this->post(route('apiCreateJob'),[
            'offer' => 'Ingeniero Software',
            'company' => 'CIBETECH',
            'description' => 'Manejo de sistemas operativos Linux',
            'status' => 'Completed',
        ]);

        $data = ['description' => "Manejo de sistemas operativos Linux"];
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);

        $response = $this->put(route('apiUpdateJob', 1), [
            'offer' => "Software Engineer",
            'company' => "CIBETECH",
            'description' => "Manejo de sistemas operativos Linux y PHP",
            'status' => "Completed",
        ]);

        $data = ['description' => "Manejo de sistemas operativos Linux y PHP"];
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);
    }
}
