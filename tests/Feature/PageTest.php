<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSeeText(['Name','Email','Comment']);
    }

    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/recibe-form-contacto', [
            'name' => '1',
            'email' => 'invalidEmail',
            'comment' => '*',
        ]);

        $response->assertSessionHasErrors([
            'name',
            'email',
            'comment',
        ]);

    }

    /** @test */
    public function prellenado_form_contacto()
    {
        $response = $this->get('/contact/1234');
        $response->assertStatus(200);
        $this->assertEquals('Oliver', $response['name']);
    }
}