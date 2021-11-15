<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    public function test_register()
    {
        $response = $this->post(route('api.register'), [
            'email' => 'a@b.com',
            'username' => 'test',
            'password' => 'password',
        ]);

        $response->assertOk();

        $this->assertDatabaseHas('users', [
            'email' => 'a@b.com',
            'username' => 'test',
        ]);
    }

    public function test_login()
    {
        User::factory()->create([
            'email' => 'a@b.com',
        ]);

        $response = $this->post(route('api.login'), [
            'email' => 'a@b.com',
            'password' => 'password',
        ]);

        $response->assertOk();

        $response->assertJsonStructure([
            'success',
            'token',
            'user',
        ]);
    }

    public function test_logout()
    {
        $this->post(route('api.logout'))
            ->assertJson(['success' => false]);

        $token = Auth::login(
            $user = User::factory()->create(['email' => 'a@b.com'])
        );

        $this->withHeaders([
            'Authorization' => "Bearer {$token}",
        ]);

        $response = $this->post(route('api.logout'));

        $response->assertOk();
    }

    public function test_session_check()
    {
        $this->post(route('api.check-session'))
            ->assertJson(['success' => false]);

        $token = Auth::login(
            $user = User::factory()->create(['email' => 'a@b.com'])
        );

        $this->withHeaders([
            'Authorization' => "Bearer {$token}",
        ]);

        $response = $this->post(route('api.check-session'));

        $response->assertOk();
    }
}
