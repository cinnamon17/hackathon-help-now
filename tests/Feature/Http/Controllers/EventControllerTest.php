<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_route_event_exists_and_index_give_a_response()
    {
        $response = $this->get('event');

        $response->assertStatus(200);

    }

    public function test_view_show_exists(){


        $event = Event::factory()->create();

        $response = $this->view('events.show', compact('event'));

        $response->assertSee($event->title);
        $response->assertSee($event->descripcion);
    }

    public function test_event_show_method_give_correct_response(){

        $event = Event::factory()->create();

        $response = $this->get("event/{$event->id}");

        $response->assertSee("$event->title");
    }
 
    public function test_view_create_exists(){

        $response = $this->view('events.create');

        $response->assertSee('form');
    }

    public function test_create_method_exists(){

        $response = $this->get('event/create');

        $response->assertSuccessful();
    }

    public function test_view_edit_exists(){

        $response = $this->view('events.edit');

        $response->assertSee('form');
    }

    public function test_edit_method_exists(){


        $event = Event::factory()->create();

        $response = $this->get("event/$event->id/edit");

        $response->assertSuccessful();
    }

    public function test_user_can_store_an_event(){

        $event = Event::factory()->create();
        $user = User::factory()->create();

        $this->actingAs($user)
             ->post('event', $event->attributesToArray() );

        $this->assertDatabaseHas('events', [
            
            'title' => $event->getAttribute('title'),
            'descripcion' => $event->getAttribute('descripcion')
        ]);}
    
}
