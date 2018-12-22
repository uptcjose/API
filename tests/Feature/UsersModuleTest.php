<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test 
     */
     function testExample()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('usuarios');
    }
}
