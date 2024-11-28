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
   public function test_List_Of_products_Can_Be_retrived()
   {
    $this->withoutExceptionHandling();

    job::all();

    $response = $this->get('/');

    $response->assertStatus(200)
            ->assertViewIs('home');
   }
}