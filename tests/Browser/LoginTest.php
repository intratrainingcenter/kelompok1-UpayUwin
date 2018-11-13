<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    /** @test */
    public function coba()
    {
        $this->browse(function ($browser) {
            $browser->visit('/backend/formLogin')
                ->type('email', 'admin@gmail.com')
                ->type('password', '1234')
                ->press('Login');
        });
    }
}
