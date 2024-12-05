<?php

namespace Tests\Feature;

use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDataBase;

    public function test_List_job_in_blade() {
         $this->withoutExceptionHandling();

         $job = job::factory(5)->create();
        
         $response = $this->get("/");

         $response->assertStatus(200)
                  ->assertViewIs("home");
   }
}