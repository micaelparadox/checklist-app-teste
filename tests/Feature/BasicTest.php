<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post(
            'http://localhost:800/api/cakes/hermes-feet',
            [
                'name' => 'douglasAgent',
                'email' => 'douglas@micael.com'
            ]
        );

        $response->assertStatus(200);
    }
}
