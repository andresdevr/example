<?php

namespace App\Repositories;

use App\Interfaces\UserPermissionInterface;
use App\Models\User;

class UserPermissionsRepository implements UserPermissionInterface
{
    public function toggle(User $user, $permission)
    {
        $user->permissions()->toggle($permission);
        return $user->fresh();
    }
}