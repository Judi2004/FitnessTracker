<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class WelcomePageTest extends DuskTestCase
{
    /**
     * Test if the welcome page loads correctly
     */
    public function testWelcomePageLoads()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('WELCOME!')
                    ->assertSee('LFC Fitness tracker puts your gym experience at your fingertips.');
        });
    }

    /**
     * Test if the login and register buttons are visible when not authenticated
     */
    public function testLoginAndRegisterButtonsVisibleForGuests()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Log in')
                    ->assertSee('Sign Up');
        });
    }

    /**
     * Test if the dashboard link is visible when the user is authenticated
     */
    public function testDashboardLinkVisibleForAuthenticatedUsers()
    {
        $this->browse(function (Browser $browser) {
            $user = \App\Models\User::factory()->create();  // Creating a test user

            $browser->loginAs($user)
                    ->visit('/')
                    ->assertSee("Welcome {$user->name}")
                    ->assertSee('Sign Out');
        });
    }

    /**
     * Test if clicking login redirects to the login page
     */
    public function testLoginButtonRedirectsToLoginPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertPathIs('/login');
        });
    }

    /**
     * Test if clicking register redirects to the register page
     */
    public function testSignUpButtonRedirectsToRegisterPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Sign Up')
                    ->assertPathIs('/register');
        });
    }
}

