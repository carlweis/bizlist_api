<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ConnectTest extends TestCase
{
    /**
     * Tests to make sure we redirect to /v1 and return the
     * API version number and name.
     *
     * @test
     */
    public function it_returns_the_api_version_number_and_name()
    {
        $this->visit('/')
            ->seeJson([
                'message' => 'BizList API',
                'version' => '1.0',
                'status' => 200
            ]);
    }
}
