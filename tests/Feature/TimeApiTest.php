<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TimeApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_time_api_returns_result(): void
    {
        $response = $this->get('api?slack_name=example_name&track=backend');

        $response->assertStatus(200);
    }
}
