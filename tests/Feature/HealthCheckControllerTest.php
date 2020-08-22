<?php

namespace JosePostiga\Larabeat\Tests\Feature;

use JosePostiga\Larabeat\Tests\TestCase;

class HealthCheckControllerTest extends TestCase
{
    /** @test */
    public function it_responds_to_health_check_requests(): void
    {
        $this->get('/health-check')
            ->assertOk();
    }
}
