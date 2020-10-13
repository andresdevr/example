<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function authenticated_users_can_create_user()
    {

        $user = factory(User::class)->create();
        $request = [
            'name' => 'username',
            'email' => 'username@userma.com',
            'password' => 'test'
        ];

        $response = $this->actingAs($user)->postJson(route('users.store'), $request);

        $response->assertStatus(201);

    }
}
