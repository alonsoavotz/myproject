<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use RefreshDatabase;
   
    /** @test */
    public function un_usuario_puede_crear_usuarios()
    {
        /** Desactivar la parte de excepcion de laravel */
        $this->withoutExceptionHandling();

        $data = [
            'name' => 'Alonso',
            'email' => 'alo@test.com',
            'password' => '1234'
        ];

       
        $resp = $this->post('/users', $data);

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users',  $data);
        $this->assertTrue( User::where('email', $data['email'])->exists() );

       // $resp->assertStatus(201);

    }
}
