<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ManualSeedTest extends TestCase
{
    /** @test */
    public function run_database_seeder_programatically()
    {
        $response = $this->get(route('trigger.seeder'));

        $response->assertStatus(200);
    }
}
