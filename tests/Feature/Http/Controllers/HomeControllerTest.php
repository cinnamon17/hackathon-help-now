<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_controller_retrieve_data()
    {

        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
