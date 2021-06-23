<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
   
    /** @test */
    public function un_usuario_puede_crear_contactos()
    {
        /** Desactivar la parte de excepcion de laravel */
        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => 'contacto',
            'phone' => '888888',
        ];

       
        $resp = $this->post('/contacts', $data);

        $this->assertTrue( auth()->user()->contacts->contains('user_id', auth()->user()->id) );
        $this->assertTrue( Contact::where('name', $data['name'])->exists() );

       // $resp->assertStatus(201);

    }

    /** @test */
    public function un_contacto_requiere_nombre()
    {
        //$this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => '',
            'phone' => '888888',
        ];

       
        $resp = $this->post('/contacts', $data);

        $resp->assertSessionHasErrors(['name']);




    }

    /** @test */
    public function un_contacto_requiere_telefono()
    {
        //$this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => 'Contacto',
          
        ];

       
        $resp = $this->post('/contacts', $data);

        $resp->assertSessionHasErrors(['phone']);




    }


}
