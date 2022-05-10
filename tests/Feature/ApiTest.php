<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testEndpoints()
    {
        $data = [
            'name'      => 'joe',
            'email'     => 'joe@doe.com',
            'password'  => '123456',
            'password_confirmation' => '123456'
            ];

        $response = $this->postJson('/api/users', $data)
                ->assertStatus(201);
                //->assertJson(['created' => true]);

        $data = array_merge($data,['name' => 'jane']);
        // Actualizamos al usuario recien creado (id = 1)
        $this->putJson("/api/users/{$response['data']['id']}", $data)->assertStatus(200);
            //->assertJson(['updated' => true]);

        // Obtenemos los datos de dicho usuario modificado
        // y verificamos que el nombre sea el correcto
        $this->getJson("api/users/{$response['data']['id']}")->assertJson(['name' => 'jane']);

        // Eliminamos al usuario
        $this->delete("api/users/{$response['data']['id']}")
            ->assertStatus(200)
            ->assertJson(['deleted' => true]);
    }
}
