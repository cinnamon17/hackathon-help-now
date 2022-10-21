<?php

namespace Tests\Feature\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventTest extends TestCase
{

    use RefreshDatabase;

    public function test_event_has_many_participants()
    {
        $event = Event::factory()->create();

        $this->assertInstanceOf(Collection::class, $event->participants);
    }
}
