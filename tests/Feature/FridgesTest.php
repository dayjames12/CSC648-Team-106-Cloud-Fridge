<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FridgesTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function a_user_can_create_a_fridge(){
        $this->withoutExceptionHandling();

        //given user logged in
        $this->actingAs(factory('App\User')->create());
        
        //when they hit endpoint /fridges/create 
        $this->post('/fridges/create',[
            'name' => 'Acme',
        ]);
        
        //then a new fridge should be made
        $this->assertDatabaseHas('fridges', ['name' => 'Acme']);
    }
}
