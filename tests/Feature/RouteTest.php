<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_loads_the_welcome_page()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
        $response->assertViewIs('welcome');
    }

    /** @test */
    public function it_loads_the_elibrary_page()
    {
        $response = $this->get('/elibrary');

        $response->assertStatus(200);
        $response->assertViewIs('elibrary');
    }

    /** @test */
    public function it_redirects_to_login_when_accessing_dashboard_without_auth()
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }
}
