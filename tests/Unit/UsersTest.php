<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function un_usuario_tiene_casa()
    {
        $user = User::factory()->create();

        $siTieneCasa = $user->tieneCasa();

        $this->assertTrue($siTieneCasa);
    }

    /** @test */
    public function un_usuario_tiene_muchos_contactos()
    {
        $user = User::factory()->create();

        $this->assertInstanceOf(Collection::class, $user->contacts);
    }
}
