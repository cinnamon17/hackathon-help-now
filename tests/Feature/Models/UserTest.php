<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;
    public function test_model_user_has_many_participants()
    {

        $user = User::factory()->create();

        $this->assertInstanceOf(Collection::class, $user->participants);

    }
}
