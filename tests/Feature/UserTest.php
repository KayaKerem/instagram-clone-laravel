<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function user_test(){
        $user = Factory(User::class)->create();
        $response = $this->actingAs($user)->get('/profile'.$user->id);
        $response->assertStatus(200);
    }
}
