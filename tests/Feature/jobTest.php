<?php

namespace Tests\Feature;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class jobTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDataBase;
   public function test_CheckIfReceiveAllEntryOfJobInJsonFile() {
    $job = job::factory(2)->create();
    $response = $this->get(route("apihome"));
    $response->assertStatus(200)
            ->assertJsonCount(2);
   }
}