<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    
    /** @test */
    
    function it_welcomes_users_with_nickname()
    {
     
        //$this->withoutExceptionHandling();

        $this->get('/saludo/jerson/viejo')
        	->assertStatus(200)
        	->assertSee('Bienvenido Jerson el viejo');
    }

    /** @test */
    
    function it_welcomes_users_without_nickname()
    {
      	        
        //$this->withoutExceptionHandling();      

        $this->get('/saludo/Jerson')
        	->assertStatus(200)
        	->assertSee('Bienvenido Jerson');
        	  
    }

}
