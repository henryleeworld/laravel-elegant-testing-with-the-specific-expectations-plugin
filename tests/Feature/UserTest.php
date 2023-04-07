<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can check user model exists', function(){
    $user = User::factory()->create();
    expect($user)->toExist();
});

it('can check the user is not authenticated', function(){
    $user = User::factory()->create();
    actingAs($user);
    expect($user)->toBeAuthenticated();
});

it('can check the user is authenticated', function(){
    $user = User::factory()->create();
    expect($user)->not->toBeAuthenticated();
});
