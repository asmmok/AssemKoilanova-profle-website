<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MediumTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(404);
    }
    public function test_get_request()
    {
        $response = $this->get('/blog/1');

        $response->assertStatus(200);
    }
}
