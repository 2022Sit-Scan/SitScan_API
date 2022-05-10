<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_shows_the_users_list()
    {
        factory(User::class)->create([
            'name' => 'Joel'
        ]);

        factory(User::class)->create([
            'name' => 'Ellie',
        ]);

        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Lista de Usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }
    
    /** @test */
    function it_displays_the_users_details()
    {
        $user = factory(User::class)->create([
            'name' => 'Escuela Estech'
        ]);

        $this->get("/users/{$user->id}") // users/5
            ->assertStatus(200)
            ->assertSee('Escuela Estech');
    }

    /** @test */
    function it_displays_a_404_error_if_the_user_is_not_found()
    {
        $this->get('/users/999')
            ->assertStatus(404)
            ->assertSee('Página no encontrada');
    }
    
    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/users/create')
            ->assertStatus(200)
            ->assertSee('Crear usuario');
    }

    /** @test */
    function it_creates_a_new_user()
    {
        $this->withoutExceptionHandling();

        $this->post('/users/', [
            'name' => 'Estech',
            'email' => 'info@escuelaestech.es',
            'password' => '123456'
        ])->assertRedirect('users');

        $this->assertCredentials([
            'name' => 'Estech',
            'email' => 'info@escuelaestech.es',
            'password' => '123456',
        ]);
    }

    /** @test */
    function the_name_is_required()
    {
        $this->from('users/create')
            ->post('/users/', [
                'name' => '',
                'email' => 'info@escuelaestech.es',
                'password' => '123456'
            ])
            ->assertRedirect('users/create')
            ->assertSessionHasErrors(['name' => 'El campo name es obligatorio.']);

        $this->assertEquals(0, User::count());
    }

    /** @test */
    function the_email_is_required()
    {
        $this->from('users/create')
            ->post('/users/', [
                'name' => 'Estech',
                'email' => '',
                'password' => '123456'
            ])
            ->assertRedirect('users/create')
            ->assertSessionHasErrors(['email']);

        $this->assertEquals(0, User::count());
    }

    /** @test */
    function the_email_must_be_valid()
    {
        $this->from('users/create')
            ->post('/users/', [
                'name' => 'Estech',
                'email' => 'correo-no-valido',
                'password' => '123456'
            ])
            ->assertRedirect('users/create')
            ->assertSessionHasErrors(['email']);

        $this->assertEquals(0, User::count());
    }

    /** @test */
    function the_email_must_be_unique()
    {
        factory(User::class)->create([
            'email' => 'info@escuelaestech.es'
        ]);

        $this->from('users/create')
            ->post('/users/', [
                'name' => 'Estech',
                'email' => 'info@escuelaestech.es',
                'password' => '123456'
            ])
            ->assertRedirect('users/create')
            ->assertSessionHasErrors(['email']);

        $this->assertEquals(1, User::count());
    }

    /** @test */
    function the_password_is_required()
    {
        $this->from('users/create')
            ->post('/users/', [
                'name' => 'Estech',
                'email' => 'info@escuelaestech.es',
                'password' => ''
            ])
            ->assertRedirect('users/create')
            ->assertSessionHasErrors(['password']);

        $this->assertEquals(0, User::count());
    }

    /** @test */
    function it_loads_the_edit_user_page()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $this->get("/users/{$user->id}/edit") // users/5/edit
            ->assertStatus(200)
            ->assertViewIs('users.edit')
            ->assertSee('Editar usuario')
            ->assertViewHas('user', function ($viewUser) use ($user) {
                return $viewUser->id === $user->id;
            });
    }

    /** @test */
    function it_updates_a_user()
    {
        $user = factory(User::class)->create();

        $this->withoutExceptionHandling();

        $this->put("/users/{$user->id}", [
            'name' => 'Estech',
            'email' => 'info@escuelaestech.es',
            'password' => '123456'
        ])->assertRedirect("/users/{$user->id}");

        $this->assertCredentials([
            'name' => 'Estech',
            'email' => 'info@escuelaestech.es',
            'password' => '123456',
        ]);
    }

    /** @test */
    function the_name_is_required_when_updating_the_user()
    {
        $user = factory(User::class)->create();

        $this->from("users/{$user->id}/edit")
            ->put("users/{$user->id}", [
                'name' => '',
                'email' => 'info@escuelaestech.es',
                'password' => '123456'
            ])
            ->assertRedirect("users/{$user->id}/edit")
            ->assertSessionHasErrors(['name']);

        $this->assertDatabaseMissing('users', ['email' => 'info@escuelaestech.es']);
    }

    /** @test */
    function the_email_must_be_valid_when_updating_the_user()
    {
        $user = factory(User::class)->create();

        $this->from("users/{$user->id}/edit")
            ->put("users/{$user->id}", [
                'name' => 'Escuela Estech',
                'email' => 'correo-no-valido',
                'password' => '123456'
            ])
            ->assertRedirect("users/{$user->id}/edit")
            ->assertSessionHasErrors(['email']);

        $this->assertDatabaseMissing('users', ['name' => 'Escuela Estech']);
    }

    /** @test */
    function the_email_must_be_unique_when_updating_the_user()
    {
        //$this->withoutExceptionHandling();

        factory(User::class)->create([
            'email' => 'existing-email@example.com',
        ]);

        $user = factory(User::class)->create([
            'email' => 'info@escuelaestech.es'
        ]);

        $this->from("users/{$user->id}/edit")
            ->put("users/{$user->id}", [
                'name' => 'Estech',
                'email' => 'existing-email@example.com',
                'password' => '123456'
            ])
            ->assertRedirect("users/{$user->id}/edit")
            ->assertSessionHasErrors(['email']);

        //
    }

    /** @test */
    function the_users_email_can_stay_the_same_when_updating_the_user()
    {
        $user = factory(User::class)->create([
            'email' => 'info@escuelaestech.es'
        ]);

        $this->from("users/{$user->id}/edit")
            ->put("users/{$user->id}", [
                'name' => 'Escuela Estech',
                'email' => 'info@escuelaestech.es',
                'password' => '12345678'
            ])
            ->assertRedirect("users/{$user->id}"); // (users.show)

        $this->assertDatabaseHas('users', [
            'name' => 'Escuela Estech',
            'email' => 'info@escuelaestech.es',
        ]);
    }

    /** @test */
    function the_password_is_optional_when_updating_the_user()
    {
        $oldPassword = 'CLAVE_ANTERIOR';

        $user = factory(User::class)->create([
            'password' => bcrypt($oldPassword)
        ]);

        $this->from("users/{$user->id}/edit")
            ->put("users/{$user->id}", [
                'name' => 'Estech',
                'email' => 'info@escuelaestech.es',
                'password' => ''
            ])
            ->assertRedirect("users/{$user->id}"); // (users.show)

        $this->assertCredentials([
            'name' => 'Estech',
            'email' => 'info@escuelaestech.es',
            'password' => $oldPassword // VERY IMPORTANT!
        ]);
    }

    /** @test */
    function it_deletes_a_user()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $this->delete("users/{$user->id}")
            ->assertRedirect('users');

        $this->assertDatabaseMissing('users', [
           'id' => $user->id
        ]);

        // Or:
        //$this->assertSame(0, User::count());
    }
}