<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_guest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_list_all_data()
    {
        $response = $this->get('/', ['']);

        $response->assertStatus(200);
    }
}
