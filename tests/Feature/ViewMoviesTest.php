<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function thaMainPageShowCorrectInformation()
    {
        $response = $this->get('/movies');

        $response->assertSuccessful();
    }
}
