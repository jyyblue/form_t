<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomeRoute()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testFormRoute()
    {
        $response = $this->json('POST', '/form', ['username' => 'test','email' => 'test@gmail.com','message' => 'Lerem df aooldkf adkj',]);

        $response
            ->assertStatus(302)
            ->assertSessionHas('status', 'Success')
        ;
    }

}
