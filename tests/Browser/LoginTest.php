<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogar()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email','lucianosantosti@hotmail.com')
            ->type('password','12345')
            ->press('Enviar')
            ->assertPathIs('/login');
        });
    }
}
