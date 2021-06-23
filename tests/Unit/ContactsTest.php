<?php

namespace Tests\Unit;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function un_contacto_pertenece_a_un_usuario()
    {
        $contact = Contact::factory()->create();

        $this->assertInstanceOf(User::class, $contact->user);
    }
}
