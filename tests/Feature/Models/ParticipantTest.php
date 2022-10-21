<?php

namespace Tests\Feature\Models;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParticipantTest extends TestCase
{

    use RefreshDatabase;

    public function test_model_participant_has_many_messages()
    {

        $participant = Participant::factory()->create();

        $this->assertInstanceOf(Collection::class, $participant->messages);
    }
}
