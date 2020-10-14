<?php

namespace App\Repositories;

use App\Interfaces\UserPermissionInterface;
use App\Models\User;

class UserPermissionsRepository implements UserPermissionInterface
{
    public function toggle(User $user, $permission)
    {
        $user->permissions()->sync($permission);
        return $user->fresh();
    }
}