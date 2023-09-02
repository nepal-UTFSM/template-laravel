<?php

use App\Models\Admin;
use App\Models\User;
use App\Services\RoleService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('has roles constant', function () {
    expect(RoleService::ROLES)->toBe([
        RoleService::ADMIN,
    ]);
});

test('get roles', function () {
    expect(RoleService::getRoles())->toBe(RoleService::ROLES);
});

test('is admin', function () {
    $admin = Admin::factory()->create();

    expect($admin->user->role()->isAdmin())->toBeTrue();
    expect($admin->user->role()->is(RoleService::ADMIN))->toBeTrue();
});

test('assign', function () {
    $user = User::factory()->create();

    $user->role()->assign(RoleService::ADMIN);

    expect($user->role()->isAdmin())->toBeTrue();
});
