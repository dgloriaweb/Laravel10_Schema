<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows a user to register', function () {
    $response = $this->postJson('/api/register', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertStatus(200);
});

it('allows a user to login', function () {
    $response = $this->postJson('/api/login', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'password'
    ]);

    $response->assertStatus(200);
});