<?php

namespace App\Decorators\Cache;

use App\Interfaces\UserPermissionInterface;
use App\Models\User;
use App\Repositories\UserPermissionsRepository;
use Illuminate\Support\Facades\Cache;

class UserPermissionCacheDecorator implements UserPermissionInterface
{

    protected $userPermissions;

    public function __construct (UserPermissionsRepository $userPermissions)
    {
        $this->userPermissions = $userPermissions;
    }
    public function toggle(User $user, $permission)
    {
        $user = $this->userPermissions->toggle($user, $permission);
        Cache::tags('users')->flush();

        return $user;
    }
}