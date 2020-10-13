<?php

namespace Tests\Unit\Models;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function a_permission_belongs_to_many_users()
    {
        $permission = factory(Permission::class)->create();
        $user = $permission->users->first();
        dd($user);
    }
}
