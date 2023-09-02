<?php

namespace App\Services;

use App\Models\User;

/**
 * Responsible for managing user roles.
 */
class RoleService
{
    public const ADMIN = 'admin';

    public const ROLES = [
        self::ADMIN,
    ];

    public function __construct(
        private User $user
    ) {
        //
    }

    public function toString(): string
    {
        $roles = [];

        foreach (self::ROLES as $role) {
            if ($this->is($role)) {
                $roles[] = $role;
            }
        }

        return implode(', ', $roles);
    }

    public static function getRoles(): array
    {
        return self::ROLES;
    }

    public function isAdmin(): bool
    {
        return $this->user->admin !== null;
    }

    public function is(string $role): bool
    {
        return match ($role) {
            'admin' => $this->isAdmin(),
            default => false,
        };
    }

    public function assign(string $role, array $attributes = []): void
    {
        switch ($role) {
            case 'admin':
                $this->user->admin()->create($attributes);
                break;
        }
    }
}
