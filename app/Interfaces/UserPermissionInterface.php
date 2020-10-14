<?php


namespace App\Interfaces;

use App\Models\User;

interface UserPermissionInterface
{
    public function toggle(User $user, $permission);
}
