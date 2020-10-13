<?php

namespace Tests\Unit\Models;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_permission_belongs_to_many_users()
    {
        $permission = factory(Permission::class)->create();
        $user = factory(User::class)->create();
        $user->permissions()->attach($permission);

        $this->assertInstanceOf(User::class, $permission->users()->first());
    }
}
