<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthCheckEndpointTest extends TestCase
{
    /**
     * @testdox Ensure the healthcheck endpoint works
     * @return void
     */

    public function test_the_health_check_endpoint_returns_a_successful_response(): void
    {
        $response = $this->get('/api/healthcheck');

        $response->assertStatus(200);
        $response->assertJson(['status' => 'ok']);
    }

}
